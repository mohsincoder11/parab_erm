<?php

namespace App\Models\admin_process\event_meeting;

use Illuminate\Database\Eloquent\Model;

class EventItemsDetailsModel extends Model
{
    protected $table = 'events_items_detail';
    protected $fillable=[
        'events_id',
        'perticular',
        'price'
    ];
}
