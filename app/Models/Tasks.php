<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Tasks
 * @package App\Models
 * @version January 22, 2021, 5:12 am UTC
 *
 * @property integer $project_name
 * @property string $module_name
 * @property string $task_name
 * @property integer $assign_to
 * @property string $task_status
 * @property string $task_start
 * @property string $task_end
 */
class Tasks extends Model
{
    use SoftDeletes;

    public $table = 'tasks';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'project_name',
        'module_name',
        'task_name',
        'assign_to',
        'task_status',
        'task_start',
        'task_end'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'project_name' => 'integer',
        'module_name' => 'string',
        'task_name' => 'string',
        'assign_to' => 'integer',
        'task_status' => 'string',
        'task_start' => 'datetime',
        'task_end' => 'datetime',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'project_name' => 'required',
        'module_name' => 'nullable',
        'task_name' => 'required',
        'assign_to' => 'required',
        'task_status' => 'required',
        'task_start' => 'required',
    ];

    
}
