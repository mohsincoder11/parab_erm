<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
  protected $fillable=['project','company_id'];

//   public function company(){

//     return $this->hasOne(Company::class,'id','company_id');
// }



}
