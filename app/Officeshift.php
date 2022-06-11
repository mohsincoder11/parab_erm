<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Officeshift extends Model
{
   protected $fillable=['company_id','shift_name','monday_in','monday_out','tuesday_in','tuesday_out','wednesday_in','wednesday_out',
   'thursday_in','thursday_out','friday_in','friday_out','saturday_in','saturday_out','sunday_in','sunday_out','sunday_week_off',
   'monday_week_off','tuesday_week_off','wednesday_week_off','thursday_week_off','friday_week_off','saturday_week_off'];

   // public function company(){

   //    return $this->hasOne(Company::class,'id','company_id');
   // }
}
