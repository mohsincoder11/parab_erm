<?php

namespace App\Models\admin_process\training;

use Illuminate\Database\Eloquent\Model;

class TrainingCalendarItemsDetailsModel extends Model
{
    protected $table = 'training_calender_items_detail';
    protected $fillable=[
        'training_calendar_id',
        'perticular',
        'price'
    ];
}
