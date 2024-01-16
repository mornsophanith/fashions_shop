<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SlideBannerTable;
use App\Models\BannerTable;
use App\Models\ProductTable;
use App\Models\CategoryTable;
use App\Models\BlogCenterTable;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function webFront() {
        $pageTitle = 'Home';
        $slide_banners = SlideBannerTable::all();
        $banners = BannerTable::all();
        $products = ProductTable::select('products.id', 'products.name', 'products.image','products.price', 'products.category_id', 'categories.name as category_name')
        ->Join('categories', 'categories.id', '=', 'products.category_id')
        ->where('type', '=', 'item')->get();
        $categories = CategoryTable::all();
        $product_offer = ProductTable::where('type', '=', 'offer')->first();

        return view('home', [
            'slide_banners'=>$slide_banners,
            'banners'=>$banners,
            'products'=>$products,
            'categories'=>$categories,
            'product_offer'=>$product_offer,
            'pageTitle'=>$pageTitle
        ]);
    }

    public function adminHome() {
        return view('admin-home');
    }

    public function auth() {
        return view('auth.login');
    }
}
