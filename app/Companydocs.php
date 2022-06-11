<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companydocs extends Model
{
    protected $fillable=['company_id','document_name','document'];
}
