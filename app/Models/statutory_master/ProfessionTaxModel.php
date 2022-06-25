<?php

namespace App\Models\statutory_master;

use Illuminate\Database\Eloquent\Model;

class ProfessionTaxModel extends Model
{
    protected $table='profession_tax';
    protected $fillable=[
        'profession_tax_file',
        'chartA',
    ];
}
