<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nik', 'name', 'age', 'gender','section', 'company',
    ];

    protected $table = 'employees';

    public function sectionRel()
    {
    	return $this->hasOne('App\Entities\EmployeeSection', 'id', 'section');
    }

    public function companyRel()
    {
    	return $this->hasOne('App\Entities\Company', 'id', 'company');
    }

}
