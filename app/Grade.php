<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $fillable=['company_id','grade_name','grade_description'];


  //   public function designations(){
  //       return $this->hasMany('App\gradeDesignations');
  // }
}
