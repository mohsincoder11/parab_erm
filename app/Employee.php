<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable=['employeeID','full_name','fathers_name','email','phone','emergency_phone','gender','company_id','project_id','department_id'
    ,'designation_id','shift_id','permanent_address','present_address','blood_group','city','state','dob','joining_date','leaving_date',
    'confirmation_date','reporting_to'];

    public function officeshift()
    {
        return $this->belongsTo(Officeshift::class, 'shift_id');
    }
}
