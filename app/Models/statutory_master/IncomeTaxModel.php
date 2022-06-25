<?php

namespace App\Models\statutory_master;

use Illuminate\Database\Eloquent\Model;

class IncomeTaxModel extends Model
{
    protected $table='income_tax';
    protected $fillable=[
        'income_tax_file',
        'chartA',
    ];
}
