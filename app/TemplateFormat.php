<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TemplateFormat extends Model
{
    use SoftDeletes;
    protected $table = "template_format";
    protected $primaryKey = 'template_id';
    protected $fillable=['title','category', 'template_file'];

}
