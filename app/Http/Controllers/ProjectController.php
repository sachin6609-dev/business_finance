<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\CreateProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Customer;
use App\Models\Project;
use Flash;
use Illuminate\Http\Request;
use Response;

class ProjectController extends AppBaseController {
	/**
	 * Display a listing of the Project.
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function index(Request $request) {
		/** @var Project $projects */
		$projects = Project::all();

		return view('projects.index')
			->with('projects', $projects);
	}

	/**
	 * Show the form for creating a new Project.
	 *
	 * @return Response
	 */
	public function create() {
		$customers = Customer::all()->sortBy('name', SORT_NATURAL | SORT_FLAG_CASE)->pluck('name', 'id');
		return view('projects.create')->with('customers', $customers);
	}

	/**
	 * Store a newly created Project in storage.
	 *
	 * @param CreateProjectRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateProjectRequest $request) {
		$input = $request->all();

		/** @var Project $project */
		$project = Project::create($input);

		Flash::success('Project saved successfully.');

		return redirect(route('projects.index'));
	}

	/**
	 * Display the specified Project.
	 *
	 * @param int $id
	 *
	 * @return Response
	 */
	public function show($id) {
		/** @var Project $project */
		$project = Project::find($id);

		if (empty($project)) {
			Flash::error('Project not found');

			return redirect(route('projects.index'));
		}

		return view('projects.show')->with('project', $project);
	}

	/**
	 * Show the form for editing the specified Project.
	 *
	 * @param int $id
	 *
	 * @return Response
	 */
	public function edit($id) {
		/** @var Project $project */
		$project = Project::find($id);
		$customers = Customer::all()->sortBy('name', SORT_NATURAL | SORT_FLAG_CASE)->pluck('name', 'id');
		if (empty($project)) {
			Flash::error('Project not found');

			return redirect(route('projects.index'));
		}

		return view('projects.edit')->with(['project' => $project, 'customers' => $customers]);
	}

	/**
	 * Update the specified Project in storage.
	 *
	 * @param int $id
	 * @param UpdateProjectRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdateProjectRequest $request) {
		/** @var Project $project */
		$project = Project::find($id);

		if (empty($project)) {
			Flash::error('Project not found');

			return redirect(route('projects.index'));
		}

		$project->fill($request->all());
		$project->save();

		Flash::success('Project updated successfully.');

		return redirect(route('projects.index'));
	}

	/**
	 * Remove the specified Project from storage.
	 *
	 * @param int $id
	 *
	 * @throws \Exception
	 *
	 * @return Response
	 */
	public function destroy($id) {
		/** @var Project $project */
		$project = Project::find($id);

		if (empty($project)) {
			Flash::error('Project not found');

			return redirect(route('projects.index'));
		}

		$project->delete();

		Flash::success('Project deleted successfully.');

		return redirect(route('projects.index'));
	}
}
