<?php

namespace App\Models\admin_process\admin_document;

use Illuminate\Database\Eloquent\Model;

class AgreementModel extends Model
{
    protected $table = 'agreements';
    protected $fillable=[
        'company_id',
        'location_id',
        'department_id',
        'date',
        'vendor_category_id',
        'expense_category_id',
        'vendor_id',
        'vendor_representative_name',
        'total_amount',
        'agreement_period',
        'agreement_terms',
        'agreement_value',
        'approved_by',
        'approved_by_designation',
        'approved_date',
        'template_id',
        'generated_agreement_number',
    ];
}
