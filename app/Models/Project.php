<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Project
 * @package App\Models
 * @version January 19, 2021, 6:35 am UTC
 *
 * @property string $name
 * @property integer $customer_id
 * @property string $start_date
 * @property string $end_date
 * @property boolean $status
 */
class Project extends Model
{
    use SoftDeletes;

    public $table = 'projects';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'customer_id',
        'start_date',
        'end_date',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'customer_id' => 'integer',
        'start_date' => 'date',
        'end_date' => 'date',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'customer_id' => 'required',
        'start_date' => 'required'
    ];

    
}
