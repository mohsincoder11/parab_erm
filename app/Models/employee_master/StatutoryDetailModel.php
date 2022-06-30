<?php

namespace App\Models\employee_master;

use Illuminate\Database\Eloquent\Model;

class StatutoryDetailModel extends Model
{
    protected $table='statutory_detail';
    protected $fillable=[
        'uan_no',
        'esic_no',
        'is_pf',
        'is_esic',
        'is_pt',

    ];
}
