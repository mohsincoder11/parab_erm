<?php

namespace App\Models\employee_master\master;

use Illuminate\Database\Eloquent\Model;

class ExpenseTypeModel extends Model
{
    protected $table='expense_type_master';
    protected $fillable=[
        'expense_name',
    ];
}
