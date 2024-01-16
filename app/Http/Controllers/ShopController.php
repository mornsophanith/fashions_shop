<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryTable;
use App\Models\ProductTable;

class ShopController extends Controller
{
    public function shop(Request $request)
    {
        $categoryId = $request->input('categoryId');
        $categories = CategoryTable::all();
        $products = ProductTable::select('products.id', 'products.name', 'products.image','products.price', 'products.category_id', 'categories.name as category_name')
        ->Join('categories', 'categories.id', '=', 'products.category_id')
        ->where('type', '=', 'item')->get();
        
        if ($categoryId) {
            $products = ProductTable::select('products.id', 'products.name', 'products.image','products.price', 'products.category_id', 'categories.name as category_name')
            ->Join('categories', 'categories.id', '=', 'products.category_id')
            ->where('type', '=', 'item')
            ->where('category_id', '=', $categoryId)
            ->get();
        }

        return view('frontend.shop', ['categories'=>$categories, 'products'=>$products]);
    }
}
