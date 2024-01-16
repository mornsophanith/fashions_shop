<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\ProductTable;
use App\Models\CategoryTable;
use App\Models\FeatureSizeTable;
use App\Models\FeatureImgTable;

class ProductController extends Controller
{
    public function store() {
        $products = ProductTable::select('products.id', 'products.name', 'products.image','products.price', 'products.category_id','products.type', 'categories.name as category')
        ->Join('categories', 'categories.id', '=', 'products.category_id')
        ->get();
        $products = ProductTable::paginate(10);
        return view('admin.products.index', ['products'=>$products]);
    }

    public function formInsert() {
        $categories = CategoryTable::all();
        return view('admin.products.insert', ['categories'=>$categories]);
    }

    public function dataInsert(Request $request) {
        $name = $request->input('name');
        $price = $request->input('price');
        $category = $request->input('category');
        $type = $request->input('type');
        $path = '';
        if($request->hasFile('image'))
        {
            $image = time().$request->file('image')->getClientOriginalName();
            $path = '/storage/'.$request->file('image')->storeAs('images', $image, 'public');
        }
        $insertSuccess = ProductTable::insert([
                                        'name'=>$name,
                                        'price'=>$price,
                                        'image'=>$path,
                                        'category_id'=>$category,
                                        'type'=>$type
                                    ]);

        return redirect()->route('product');
    }

    public function update($id) {
        $categories = CategoryTable::all();
        $product = ProductTable::find($id);
        return view('admin.products.edit', ['product'=>$product, 'categories'=>$categories]);
    }

    public function dataUpdate(Request $request, $id) {
        $product = ProductTable::find($id);
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->category_id = $request->input('category');
        $product->type = $request->input('type');
        if($request->hasFile('image'))
        {
            $old_value = 'storage/'. $product->image;
            if(ProductTable::exists($old_value))
            {
                ProductTable::destroy($old_value);
            }
            $image = time().$request->file('image')->getClientOriginalName();
            $product->image = '/storage/'.$request->file('image')->storeAs('images', $image, 'public');
        }
        $product->update();
        
        return redirect()->route('product')->with('status','Student Updated Successfully');
    }

    public function delete(Request $request, $id){
        try {
            ProductTable::destroy($id);
            return redirect()->route('product');
        } catch(\Exception $e) {
            report($e);
        }
    }

    // web frontend 

    public function detailProduct($id) {
        $product = ProductTable::select('products.id', 'products.name', 'products.image','products.price', 'products.category_id', 'categories.name as category')
        ->Join('categories', 'categories.id', '=', 'products.category_id')
        ->find($id);

        $products = ProductTable::select('products.id', 'products.name', 'products.image','products.price', 'products.category_id', 'categories.name as category')
        ->Join('categories', 'categories.id', '=', 'products.category_id')
        ->where('type', '=', 'item')
        ->get($id);

        $features_size = FeatureSizeTable::select('feature_size.id', 'feature_size.size', 'feature_size.product_id')
        ->Join('products', 'products.id', '=', 'feature_size.product_id')
        ->where('feature_size.product_id', '=', $id)
        ->get($id);

        $features_img = FeatureImgTable::select('feature_img.id', 'feature_img.image', 'feature_img.product_id')
        ->Join('products', 'products.id', '=', 'feature_img.product_id')
        ->where('feature_img.product_id', '=', $id)
        ->get($id);

        return view('frontend.detail-product', 
        [
            'product'=>$product,
            'products'=>$products,
            'features_size'=>$features_size,
            'features_img'=>$features_img
        ]);
    }

}
