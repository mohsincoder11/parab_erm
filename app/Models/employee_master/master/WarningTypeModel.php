<?php

namespace App\Models\employee_master\master;

use Illuminate\Database\Eloquent\Model;

class WarningTypeModel extends Model
{
    protected $table='warning_type_master';
    protected $fillable=[
        'warning_name',
    ];
}
