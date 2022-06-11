<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deduction extends Model
{
    protected $fillable=['company_id','deduction_title','type','percent','apply_to'];
}
