<?php

namespace App\Models\admin_master;

use Illuminate\Database\Eloquent\Model;

class AdminDocumentsModel extends Model
{
    protected $table='admin_documents';
    protected $fillable=[
        'file',
        'company_id',
        'location_id',
        'department_id',
        'project_id',
        'document_type',
        'remark'

    ];
}
