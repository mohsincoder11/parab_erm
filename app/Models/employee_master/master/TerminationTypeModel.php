<?php

namespace App\Models\employee_master\master;

use Illuminate\Database\Eloquent\Model;

class TerminationTypeModel extends Model
{
    protected $table='termination_type_master';
    protected $fillable=[
        'termination_name',
    ];
}
