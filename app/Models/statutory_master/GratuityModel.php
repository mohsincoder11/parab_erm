<?php

namespace App\Models\statutory_master;

use Illuminate\Database\Eloquent\Model;

class GratuityModel extends Model
{
    protected $table='gratuity';
    protected $fillable=[
        'gratuity_file',
        'chartA',
        'chalan'
    ];
}
