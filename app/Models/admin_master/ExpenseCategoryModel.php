<?php

namespace App\Models\admin_master;

use Illuminate\Database\Eloquent\Model;

class ExpenseCategoryModel extends Model
{
    protected $table='expenses_category';
    protected $fillable=[
        'category',
        'company_id',
        'location_id',
        'department_id',

    ];
}
