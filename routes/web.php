<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', [App\Http\Controllers\DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/', [App\Http\Controllers\HomeController::class, 'auth'])->name('auth');
Auth::routes();

// admin 
Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::get('/admin/account', [App\Http\Controllers\UserController::class, 'account'])->name('admin.account');
Route::get('/admin/user', [App\Http\Controllers\UserController::class, 'user'])->name('admin.user');
Route::post('/dataInsertUser', [App\Http\Controllers\UserController::class, 'dataInsert']);
Route::get('/user-view/{id}', [App\Http\Controllers\UserController::class, 'view'])->name('user.view');
Route::get('/delete-user/{id}', [App\Http\Controllers\UserController::class, 'deleteUser']);
Route::get('/update-user/{id}', [App\Http\Controllers\UserController::class, 'updateUser']);
Route::put('/dataUpdateUser/{id}', [App\Http\Controllers\UserController::class, 'dataUpdateUser']);
//account setting 
Route::put('/update-data-personal/{id}', [App\Http\Controllers\UserController::class, 'updatePersonalInformation']);

Route::get('/admin/slide-banner', [App\Http\Controllers\BannerController::class, 'store'])->name('slide_banner');
Route::post('/data-insert-slide-banner', [App\Http\Controllers\BannerController::class, 'dataInsert']);
Route::get('/form-insert-slide-banner', [App\Http\Controllers\BannerController::class, 'insert'])->name('insert.slidebanner');
Route::get('/form-edit-slide-banner/{id}', [App\Http\Controllers\BannerController::class, 'updateSlideBanner'])->name('update.slidebanner');
Route::put('/data-edit-slide-banner/{id}', [App\Http\Controllers\BannerController::class, 'dataUpdate']);
Route::get('/delete-slide-banner/{id}', [App\Http\Controllers\BannerController::class, 'delete']);

Route::get('/admin/category', [App\Http\Controllers\CategoryController::class, 'store'])->name('category');
Route::get('/form-insert', [App\Http\Controllers\CategoryController::class, 'formInsert'])->name('admin.insert');
Route::post('/dataInsert', [App\Http\Controllers\CategoryController::class, 'dataInsert']);
Route::get('/form-edit-category/{id}', [App\Http\Controllers\CategoryController::class, 'formUpdate'])->name('admin.category.update');
Route::put('/data-update-category/{id}', [App\Http\Controllers\CategoryController::class, 'dataUpdate']);

Route::get('/admin/sub-category', [App\Http\Controllers\SubCategoryController::class, 'index'])->name('sub.category');
Route::get('/form-insert-sub-category', [App\Http\Controllers\SubCategoryController::class, 'insert'])->name('admin.insert.sub_category');
Route::post('/dataInsertSubCategory', [App\Http\Controllers\SubCategoryController::class, 'dataInsert']);
Route::get('/form-edit-sub-category/{id}', [App\Http\Controllers\SubCategoryController::class, 'update'])->name('admin.update.sub_category');
Route::put('/data-update-sub-category/{id}', [App\Http\Controllers\CategoryController::class, 'dataUpdate']);

Route::get('/admin/product', [App\Http\Controllers\ProductController::class, 'store'])->name('product');
Route::get('/form-insert-product', [App\Http\Controllers\ProductController::class, 'formInsert'])->name('form-insert-product');
Route::post('/insert-product', [App\Http\Controllers\ProductController::class, 'dataInsert']);
Route::get('/delete-product/{id}', [App\Http\Controllers\ProductController::class, 'delete']);
Route::get('/form-edit-product/{id}', [App\Http\Controllers\ProductController::class, 'update'])->name('form-update-product');
Route::put('/data-update-product/{id}', [App\Http\Controllers\ProductController::class, 'dataUpdate']);

Route::get('/admin/feature-size', [App\Http\Controllers\FeatureController::class, 'featureSize'])->name('feature.size');
Route::post('/dataInsertfeature', [App\Http\Controllers\FeatureController::class, 'dataInsert'])->name('insert.feature');
Route::get('/delete-feature/{id}', [App\Http\Controllers\FeatureController::class, 'destroy']);
Route::get('/form-update-feature/{id}', [App\Http\Controllers\FeatureController::class, 'formUpdate'])->name('update.feature');
Route::put('/data-update-feature/{id}', [App\Http\Controllers\FeatureController::class, 'dataUpdate']);

Route::get('/admin/feature-img', [App\Http\Controllers\FeatureController::class, 'featureImage'])->name('feature.img');
Route::post('/dataInsertfeatureimg', [App\Http\Controllers\FeatureController::class, 'dataInsertImg'])->name('insert.feature.img');
Route::get('/delete-feature-img/{id}', [App\Http\Controllers\FeatureController::class, 'destroyFeatureImg']);
Route::get('/form-update-feature-img/{id}', [App\Http\Controllers\FeatureController::class, 'formUpdateFeatureImg'])->name('update.feature.img');
Route::put('/data-update-feature-img/{id}', [App\Http\Controllers\FeatureController::class, 'dataUpdateFeatureImg']);

Route::get('/admin/banner', [App\Http\Controllers\BannerController::class, 'store_banner'])->name('banner');
Route::get('/form-insert-banner', [App\Http\Controllers\BannerController::class, 'insertBanner'])->name('insert.banner');
Route::post('/data-insert-banner', [App\Http\Controllers\BannerController::class, 'dataInsertBanner']);
Route::get('/form-edit-banner/{id}', [App\Http\Controllers\BannerController::class, 'update'])->name('update.banner');
Route::put('/data-update-banner/{id}', [App\Http\Controllers\BannerController::class, 'dataUpdateBanner']);
Route::get('/delete-banner/{id}', [App\Http\Controllers\BannerController::class, 'deleteBanner']);

Route::get('/admin/blog-center', [App\Http\Controllers\BlogCenterController::class, 'store'])->name('blog_center');
Route::get('/admin/form-insert-blog_center', [App\Http\Controllers\BlogCenterController::class, 'formInsert'])->name('form.insert.blog_center');
Route::post('/data-insert-blog_center', [App\Http\Controllers\BlogCenterController::class, 'dataInsertBlogCenter']);
Route::get('form-edit-blog_center/{id}', [App\Http\Controllers\BlogCenterController::class, 'update'])->name('form.update.blog_center');
Route::put('/data-update-blog_center/{id}', [App\Http\Controllers\BlogCenterController::class, 'dataUpdate']);
Route::get('/delete-blog_center/{id}', [App\Http\Controllers\BlogCenterController::class, 'delete']);

Route::get('/admin/social-media', [App\Http\Controllers\SocialController::class, 'socail'])->name('admin.socail');
Route::post('/dataInsertSocial', [App\Http\Controllers\SocialController::class, 'dataInsert'])->name('insert.social');
Route::get('/delete-social/{id}', [App\Http\Controllers\SocialController::class, 'detroy']);

// frontend 
Route::get('/home', [App\Http\Controllers\HomeController::class, 'webFront'])->name('home');
Route::get('/detail-product/{id}', [App\Http\Controllers\ProductController::class, 'detailProduct'])->name('detail.product');
Route::get('/shop', [App\Http\Controllers\ShopController::class, 'shop'])->name('shop');

Route::get('/cart', [App\Http\Controllers\CartController::class, 'cart'])->name('cart');
Route::get('/add-to-cart/{id}', [App\Http\Controllers\CartController::class, 'addToCart'])->name('add.to.cart');
Route::patch('/update-cart', [App\Http\Controllers\CartController::class, 'updateCart'])->name('update_cart');
Route::delete('/remove-from-cart', [App\Http\Controllers\CartController::class, 'removeCart'])->name('remove_from_cart');

Route::get('/checkout', [App\Http\Controllers\CheckoutController::class, 'checkout'])->name('checkout');
Route::post('/place-order', [App\Http\Controllers\CheckoutController::class, 'placeOrder'])->name('place_order');

Route::get('/contact', [App\Http\Controllers\ContactController::class, 'contact'])->name('contact');


