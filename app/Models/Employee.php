<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Employee
 * @package App\Models
 * @version January 22, 2021, 4:47 am UTC
 *
 * @property string $emp_name
 * @property integer $emp_mobile
 * @property string $emp_personal_email
 * @property string $emp_company_email
 * @property string $emp_role
 * @property string $emp_bankAccount
 * @property integer $emp_assigned_project
 * @property string $emp_joinDate
 */
class Employee extends Model
{
    use SoftDeletes;

    public $table = 'employees';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'emp_name',
        'emp_mobile',
        'emp_personal_email',
        'emp_company_email',
        'emp_role',
        'emp_bankAccount',
        'emp_assigned_project',
        'emp_joinDate'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'emp_name' => 'string',
        'emp_mobile' => 'integer',
        'emp_personal_email' => 'string',
        'emp_company_email' => 'string',
        'emp_role' => 'string',
        'emp_bankAccount' => 'string',
        'emp_assigned_project' => 'integer',
        'emp_joinDate' => 'date',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'emp_name' => 'required',
        'emp_mobile' => 'required',
        'emp_assigned_project' => 'required'
    ];

    
}
