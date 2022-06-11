<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Allowances extends Model
{
   protected $fillable=['company_id','title','type','percent','apply_to'];
}
