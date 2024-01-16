<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\SubCategoryTable;
use App\Models\CategoryTable;

class SubCategoryController extends Controller
{
    public function index() {
        $sub_categories = SubCategoryTable::select('sub_categories.id', 'sub_categories.name', 'sub_categories.categoryID', 'categories.name as main_category')
        ->Join('categories', 'categories.id', '=', 'sub_categories.categoryID')
        ->get();
        return view('admin.sub_categories.index', ['sub_categories'=>$sub_categories]);
    }
    // insert 
    public function insert() {
        $categories = DB::table('categories')->get();
        return view('admin.sub_categories.insert', ['categories'=>$categories]);
    }

    public function dataInsert(Request $request) {
        $main_category = $request->input('main_category');
        $sub_category = $request->input('sub_category');
        SubCategoryTable::insert([
            'name' => $sub_category,
            'categoryId' => $main_category,
        ]);

        return redirect()->route('sub.category');
    }

    // update 
    public function update($id) {
        $sub_category = SubCategoryTable::find($id);
        $categories = CategoryTable::all();
        return view('admin.sub_categories.edit', ['sub_category'=>$sub_category, 'categories'=>$categories]);
    }
}