<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
   Protected $fillable=['designation','company_id'];

  // public function Company(){
  //   return $this->hasOne(Company::class,'id','company_id');
  // }

  // public function project(){
  //   return $this->hasOne(Project::class,'id','project_id');
  // }
  
  // public function department(){
  //   return $this->hasOne(Department::class,'id','department_id');
  // }


}
