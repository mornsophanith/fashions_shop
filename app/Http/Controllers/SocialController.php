<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SocialTable;

class SocialController extends Controller
{
    public function socail() {
        $socials = SocialTable::all();
        return view('admin.socail_medai.index', ['socials'=>$socials]);
    }

    public function dataInsert(Request $request) {
        $facebook = $request->input('facebook');
        $instargram = $request->input('instargram');
        $youtube = $request->input('youtube');
        $linkin = $request->input('linkin');
        $twiter = $request->input('twiter');
        $line = $request->input('line');
        SocialTable::insert([
            'facebook'=>$facebook,
            'instargram'=>$instargram,
            'youtube'=>$youtube,
            'twiter'=>$twiter,
            'linkin'=>$linkin,
            'line'=>$line,
        ]);
        return redirect()->route('admin.social');
    }

    public function detroy(Request $request, $id){
        try {
            SocialTable::destroy($id);
            return redirect()->route('admin.socail');
        } catch(\Exception $e) {
            report($e);
        }
    }
}
