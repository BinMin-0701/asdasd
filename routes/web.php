<?php

use App\Http\Controllers\AddProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MyController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Admin\AdminNewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Product;

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

// Route::get('/', function () {
//   return view('welcome');
// });

Route::get('news', function () {
  return view('news');
});

Route::get('test', [MyController::class, 'index']);
Auth::routes();

Route::middleware('password.confirm')->get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', function () {
  return view('admin/index');
})->middleware('CheckLogin::class');


// Route::get('/admin',function(){
//     return view('admin/index');
// })->middleware('CheckLogin::class');

Route::get('/admin/create', [PostController::class, 'showform']);
Route::post('/admin/create', [PostController::class, 'validation']);

Route::get('/admin/news/create', [AdminNewsController::class, 'create']);

Route::post('/admin/news/store', [AdminNewsController::class, 'store']);

Route::get('/admin/news', [AdminNewsController::class, 'index']);

// show page edit
Route::get('/admin/news/edit/{id}', [AdminNewsController::class, 'edit']);

//show detail data
Route::get('/admin/news/{id}', [AdminNewsController::class, 'show']);

// edit data
Route::PATCH('/admin/news/update/{id}', [AdminNewsController::class, 'update']);


// //Upload file
// Route::get('/image', [ImageController::class, 'index'])->name('image.index');
// Route::post('/image', [ImageController::class, 'store'])->name('image.store');

//show product
Route::get('/', [ProductController::class, 'productList'])->name('products.list');
Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');

// //Tìm kiếm
// Route::get('/search', [ProductController::class, 'search'])->name('search');

// //Gui mail
// Route::get('/mail', [SendEmailController::class, 'show'])->name('show');
// Route::post('/mail/send', [SendEmailController::class, 'sendmail'])->name('sendmail');


// Route::get('/product/products', [AddProductController::class, 'index']);

// thêm sản phẩm
Route::get('/product/news/create', [AddProductController::class, 'create']);