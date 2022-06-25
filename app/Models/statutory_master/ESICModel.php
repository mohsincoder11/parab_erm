<?php

namespace App\Models\statutory_master;

use Illuminate\Database\Eloquent\Model;

class ESICModel extends Model
{
    protected $table='employee_esic';
    protected $fillable=[
        'esic_file',
        'chartA',
    ];    
}
