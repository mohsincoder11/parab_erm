<?php

namespace App\Models\employee_master\other_master;

use Illuminate\Database\Eloquent\Model;

class PaymentTypeModel extends Model
{


    protected $table = 'payment_method';
    protected $fillable = [
        'payment_method',
        'payment_percenatage',
        'account_no'
    ];
}
