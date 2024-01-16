<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\CategoryTable;


class CategoryController extends Controller
{
    public function store() {
        // $categories = DB::table('categories')->get();
        $categories = CategoryTable::paginate(10);
        return view('admin.categories.index', ['categories' => $categories]);
    }
    // insert 
    public function formInsert() {
        return view('admin.categories.insert');
    }

    public function dataInsert(Request $request) {

        $name = $request->input('name');
        CategoryTable::insert(['name'=>$name]);
        
        return redirect()->route('category');
    }
    // update 
    public function formUpdate($id) {
        $category = CategoryTable::find($id);
        return view('admin.categories.edit', ['category'=>$category]);
    }

    public function dataUpdate(Request $request, $id ) {
        $category = CategoryTable::find($id);
        $category->name = $request->input('name');
        $category->update();

        return redirect()->route('category');
    }
}
