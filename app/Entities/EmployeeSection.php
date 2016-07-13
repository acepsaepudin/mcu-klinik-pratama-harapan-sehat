<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class EmployeeSection extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    protected $table = 'employee_sections';

}
