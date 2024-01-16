<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\SlideBannerTable;
use App\Models\BannerTable;

class BannerController extends Controller
{
    // Slide Banner 
    public function store() {
        $slide_banners = DB::table('slide_banners')->get();
        return view('admin.slide_banners.index', ['slide_banners'=>$slide_banners]);
    }
        // insert 
    public function insert() {
        return view('admin.slide_banners.insert');
    }

    public function dataInsert(Request $request) {
        $title = $request->input('title');
        $widget = $request->input('widget');
        $path = '';
        if($request->hasFile('image'))
        {
            $image = time().$request->file('image')->getClientOriginalName();
            $path = '/storage/'.$request->file('image')->storeAs('images', $image, 'public');
        }

        $dataInsert = SlideBannerTable::insert([
            'title' => $title,
            'widget' => $widget,
            'image' => $path,
        ]);
        return redirect()->route('slide_banner');
    }
        // update 
    public function updateSlideBanner($id) {
        $slide_banners = SlideBannerTable::find($id);
        return view('admin.slide_banners.edit', ['slide_banners'=>$slide_banners]);
    }

    public function dataUpdate(Request $request, $id) {
        $slide_banner = SlideBannerTable::find($id);
        $slide_banner->title = $request->input('title');
        $slide_banner->widget = $request->input('widget');
        if($request->hasFile('image'))
        {
            $old_value = 'storage/'. $slide_banner->image;
            if(SlideBannerTable::exists($old_value))
            {
                SlideBannerTable::destroy($old_value);
            }
            $image = time().$request->file('image')->getClientOriginalName();
            $slide_banner->image = '/storage/'.$request->file('image')->storeAs('images', $image, 'public');
        }
        $slide_banner->update();
        
        return redirect()->route('slide_banner')->with('status','Student Updated Successfully');
    }
        // delete 

    public function delete(Request $request, $id){
        try {
            SlideBannerTable::destroy($request->id);
            return redirect()->route('slide_banner');
        } catch(\Exception $e) {
            report($e);
        }
    }
    
    // Banner 
    public function store_banner() {
        $banners = DB::table('banners')->get();
        return view('admin.banners.index', ['banners'=>$banners]);
    }

    public function insertBanner() {
        return view('admin.banners.insert');
    }

    public function dataInsertBanner(Request $request) {
        $title = $request->input('title');
        $widget = $request->input('widget');
        $path = '';
        if($request->hasFile('image'))
        {
            $image = time().$request->file('image')->getClientOriginalName();
            $path = '/storage/'.$request->file('image')->storeAs('images', $image, 'public');
        }
        BannerTable::insert([
            'title' => $title,
            'widget' => $widget,
            'image' => $path,
        ]);
        return redirect()->route('banner');
    }

    public function update($id) {
        $banner = BannerTable::find($id);
        return view('admin.banners.edit', ['banner'=>$banner]);
    }

    public function dataUpdateBanner(Request $request, $id) {
        $banner = BannerTable::find($id);
        $banner->title = $request->input('title');
        $banner->widget = $request->input('widget');
        if($request->hasFile('image'))
        {
            $old_value = 'storage/'. $banner->image;
            if(BannerTable::exists($old_value))
            {
                BannerTable::destroy($old_value);
            }
            $image = time().$request->file('image')->getClientOriginalName();
            $banner->image = '/storage/'.$request->file('image')->storeAs('images', $image, 'public');
        }
        $banner->update();
        
        return redirect()->route('banner')->with('status','Student Updated Successfully');
    }

    public function deleteBanner(Request $request, $id){
        try {
            BannerTable::destroy($id);
            return redirect()->route('banner');
        } catch(\Exception $e) {
            report($e);
        }
    }
}
