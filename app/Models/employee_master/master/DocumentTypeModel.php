<?php

namespace App\Models\employee_master\master;

use Illuminate\Database\Eloquent\Model;

class DocumentTypeModel extends Model
{
    protected $table='document_type_master';
    protected $fillable=[
        'document_name',
    ];
}
