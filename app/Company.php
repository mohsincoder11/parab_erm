<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable=['company_name','company_type','trading_name','website','pan_no','tan_no','email','registration_no','gstin','company_logo','registered_address',
    'sector_type','contact_no','city','state','zip_code','contact_person_name','person_mobile'];
    
   
}
