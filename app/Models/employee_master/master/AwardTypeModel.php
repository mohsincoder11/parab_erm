<?php

namespace App\Models\employee_master\master;

use Illuminate\Database\Eloquent\Model;

class AwardTypeModel extends Model
{
    protected $table='award_type_master';
    protected $fillable=[
        'award_name',
    ];
}
