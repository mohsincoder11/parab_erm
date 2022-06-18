<?php

namespace App\Http\Controllers\admin\master\asset_master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\asset_master\AssetCategoryModel;

class Category extends Controller
{
    public function category()
    {
        $category = AssetCategoryModel::orderby('id', 'desc')->get();

        return view('masters.assets_master.category', compact('category'));
    }

    public function store_category(Request $request)
    {
        AssetCategoryModel::create([
            'category_name' => $request->category_name,
        ]);
        return back()->with('success', 'Record added successfully.');
    }
    
    public function delete_category(Request $request)
    {
        AssetCategoryModel::where('id', $request->id)->delete();
        return response()->json(1);
    }

    public function edit_category(Request $request)
    {
        $data = AssetCategoryModel::where('id', $request->id)
            ->first();
        return response()->json($data);
    }

    public function update_category(Request $request)
    {
        AssetCategoryModel::where('id', $request->id)->update([
            'category_name' => $request->category_name,
        ]);
        return back()->with('success', 'Record updated successfully.');
    }
}
