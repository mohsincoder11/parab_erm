<?php

namespace App\Models\asset_master;

use Illuminate\Database\Eloquent\Model;

class AssetCategoryModel extends Model
{
    protected $table='asset_category';
    protected $fillable=['category_name'];
}
