<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTasksRequest;
use App\Http\Requests\UpdateTasksRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Tasks;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Employee;
use Flash;
use Response;

class TasksController extends AppBaseController
{
    /**
     * Display a listing of the Tasks.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var Tasks $tasks */
        $tasks = Tasks::all();

        return view('tasks.index')
            ->with('tasks', $tasks);
    }

    /**
     * Show the form for creating a new Tasks.
     *
     * @return Response
     */
    public function create()
    {
        $projects  = Project::where('status',1)->get()->pluck('name', 'id');
        $employees  = Employee::where('status',1)->get()->pluck('emp_name', 'id');
        return view('tasks.create')->with(['projects' => $projects,'employees' =>$employees]);
    }

    /**
     * Store a newly created Tasks in storage.
     *
     * @param CreateTasksRequest $request
     *
     * @return Response
     */
    public function store(CreateTasksRequest $request)
    {
        $input = $request->all();

        /** @var Tasks $tasks */
        $tasks = Tasks::create($input);

        Flash::success('Tasks saved successfully.');

        return redirect(route('tasks.index'));
    }

    /**
     * Display the specified Tasks.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Tasks $tasks */
        $tasks = Tasks::find($id);

        if (empty($tasks)) {
            Flash::error('Tasks not found');

            return redirect(route('tasks.index'));
        }

        return view('tasks.show')->with('tasks', $tasks);
    }

    /**
     * Show the form for editing the specified Tasks.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Tasks $tasks */
        $tasks = Tasks::find($id);
        $projects  = Project::where('status',1)->get()->pluck('name', 'id');
        $employees  = Employee::where('status',1)->get()->pluck('emp_name', 'id');
        if (empty($tasks)) {
            Flash::error('Tasks not found');

            return redirect(route('tasks.index'));
        }
        return view('tasks.edit')->with(['tasks' => $tasks,'projects' => $projects,'employees' =>$employees]);
    }

    /**
     * Update the specified Tasks in storage.
     *
     * @param int $id
     * @param UpdateTasksRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTasksRequest $request)
    {
        /** @var Tasks $tasks */
        $tasks = Tasks::find($id);

        if (empty($tasks)) {
            Flash::error('Tasks not found');

            return redirect(route('tasks.index'));
        }

        $tasks->fill($request->all());
        $tasks->save();

        Flash::success('Tasks updated successfully.');

        return redirect(route('tasks.index'));
    }

    /**
     * Remove the specified Tasks from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Tasks $tasks */
        $tasks = Tasks::find($id);

        if (empty($tasks)) {
            Flash::error('Tasks not found');

            return redirect(route('tasks.index'));
        }

        $tasks->delete();

        Flash::success('Tasks deleted successfully.');

        return redirect(route('tasks.index'));
    }
}
