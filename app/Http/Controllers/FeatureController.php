<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FeatureSizeTable;
use App\Models\FeatureImgTable;
use App\Models\ProductTable;

class FeatureController extends Controller
{
    public function featureSize(Request $request) {
        $per_page = $request->input('per_paginate');
        $features_size = FeatureSizeTable::paginate(10);
        $products = ProductTable::all();

        return view('admin.feature_size.index', ['features_size'=>$features_size, 'products'=>$products]);
    }

    public function dataInsert(Request $request) {
        $product_id = $request->input('product_id');
        $size = $request->input('size');
        $dataInsert = FeatureSizeTable::insert([
            'product_id' => $product_id,
            'size'=>$size,
        ]);
        return redirect()->route('feature.size');
    }

    public function formUpdate($id) {
        $feature_size = FeatureSizeTable::find($id);
        $products = ProductTable::all();
        return view('admin.feature_size.edit', ['feature_size'=>$feature_size, 'products'=>$products]);
    }

    public function dataUpdate(Request $request, $id) {
        $feature_size = FeatureSizeTable::find($id);
        $feature_size->size = $request->input('size');
        $feature_size->product_id = $request->input('product_id');
        $feature_size->update();
        
        return redirect()->route('feature.size')->with('status','Student Updated Successfully');
    }

    public function destroy(Request $request, $id){
        try {
            FeatureSizeTable::destroy($id);
            return redirect()->route('feature.size');
        } catch(\Exception $e) {
            report($e);
        }
    }

    // feature image 

    public function featureImage() {
        $features_image = FeatureImgTable::paginate(10);
        $products = ProductTable::all();

        return view('admin.feature_img.index', ['features_image'=>$features_image, 'products'=>$products]);
    }

    public function dataInsertImg(Request $request) {
        $product_id = $request->input('product_id');
        $path = '';
        if($request->hasFile('image'))
        {
            $image = time().$request->file('image')->getClientOriginalName();
            $path = '/storage/'.$request->file('image')->storeAs('images', $image, 'public');
        }
        $dataInsert = FeatureImgTable::insert([
            'product_id' => $product_id,
            'image'=> $path,
        ]);
        return redirect()->route('feature.img');
    }

    public function formUpdateFeatureImg($id) {
        $feature_img = FeatureImgTable::find($id);
        $products = ProductTable::all();
        return view('admin.feature_img.edit', ['feature_img'=>$feature_img, 'products'=>$products]);
    }

    public function dataUpdateFeatureImg(Request $request, $id) {
        $feature_img = FeatureImgTable::find($id);
        $feature_img->product_id = $request->input('product_id');
        if($request->hasFile('image'))
        {
            $old_value = 'storage/'. $feature_img->image;
            if(FeatureImgTable::exists($old_value))
            {
                FeatureImgTable::destroy($old_value);
            }
            $image = time().$request->file('image')->getClientOriginalName();
            $feature_img->image = '/storage/'.$request->file('image')->storeAs('images', $image, 'public');
        }
        $feature_img->update();
        
        return redirect()->route('feature.img')->with('status','Student Updated Successfully');
    }

    public function destroyFeatureImg(Request $request, $id){
        try {
            FeatureImgTable::destroy($id);
            return redirect()->route('feature.img');
        } catch(\Exception $e) {
            report($e);
        }
    }
}
