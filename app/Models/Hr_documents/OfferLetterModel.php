<?php

namespace App\Models\Hr_documents;

use Illuminate\Database\Eloquent\Model;

class OfferLetterModel extends Model
{
    protected $table = 'offer_letter';
    protected $fillable = [
        'company_id',
        'location_id',
        'project_id',
        'document',
        'employee_status',
        'file'

    ];
}
