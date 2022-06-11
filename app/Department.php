<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable=['department','company_id'];

//     public function company(){
//       return $this->hasOne(Company::class,'id','company_id');
//   }

//   public function project(){
//     return $this->hasOne(Project::class,'id','project_id');
// }
}
