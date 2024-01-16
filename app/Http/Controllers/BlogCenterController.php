<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\BlogCenterTable;

class BlogCenterController extends Controller
{
    public function store(){

        $blog_centers = DB::table('blog_centers')->get();
        return view('admin.blog_center.index', ['blog_centers'=>$blog_centers]);
    }

    public function formInsert() {
        return view('admin.blog_center.insert');
    }

    public function dataInsertBlogCenter(Request $request) {

        $name = $request->input('name');
        $price = $request->input('price');
        $sub_title = $request->input('sub_title');
        $path = '';
        if($request->hasFile('image'))
        {
            $image = time().$request->file('image')->getClientOriginalName();
            $path = '/storage/'.$request->file('image')->storeAs('images', $image, 'public');
        }
        $requestData = [
            'name' => $name,
            'price' => $price,
            'sub_title' => $sub_title,
            'image' => $path,
        ];
        $date_insert = BlogCenterTable::insert($requestData);
        
        return redirect()->route('blog_center');
    }

    public function update($id) {
        $blog_center = BlogCenterTable::find($id);
        return view('admin.blog_center.edit', ['blog_center'=>$blog_center]);
    }

    public function dataUpdate(Request $request, $id) {
        $blog_center = BlogCenterTable::find($id);
        $blog_center->name = $request->input('name');
        $blog_center->sub_title = $request->input('sub_title');
        $blog_center->price = $request->input('price');
        if($request->hasFile('image'))
        {
            $old_value = 'storage/'. $blog_center->image;
            if(BlogCenterTable::exists($old_value))
            {
                BlogCenterTable::destroy($old_value);
            }
            $image = time().$request->file('image')->getClientOriginalName();
            $blog_center->image = '/storage/'.$request->file('image')->storeAs('images', $image, 'public');
        }
        $blog_center->update();
        
        return redirect()->route('blog_center')->with('status','Student Updated Successfully');
    }

    public function delete(Request $request, $id){
        try {
            BlogCenterTable::destroy($request->id);
            return redirect()->route('blog_center');
        } catch(\Exception $e) {
            report($e);
        }
    }
}
