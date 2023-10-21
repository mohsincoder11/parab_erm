<?php

namespace App\Models\admin_process\event_meeting;

use Illuminate\Database\Eloquent\Model;

class MeetingItemsDetailsModel extends Model
{
    protected $table = 'meetings_items_detail';
    protected $fillable=[
        'meetings_id',
        'perticular',
        'price'
    ];
}
