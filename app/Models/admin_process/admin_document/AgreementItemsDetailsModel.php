<?php

namespace App\Models\admin_process\admin_document;

use Illuminate\Database\Eloquent\Model;

class AgreementItemsDetailsModel extends Model
{
    protected $table = 'agreements_items_detail';
    protected $fillable=[
        'agreements_id',
        'service_id',
        'quantity',
        'rate',
        'details',
    ];
}
