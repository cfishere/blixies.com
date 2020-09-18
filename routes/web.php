<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Mail\ContactForm;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('products', function() {
	$products = Product::latest()->get();
	return view('products.index', ['products' => $products]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/contact', function(){
	return view('contact');
});

Route::post('/contact', function(Request $request) {

	$contact = $request()->validate(

		[
			'name' => 'required',
			'email' => 'required|email',
			'phone' => 'required',
			'message' => 'required'
		]);

	Mail::to('chrisnicholsinbox@outlook.com')->send(new ContactForm($contact));

	return back()->with('success_message', 'Your message was sent, and we\'ll be in touch shortly!');

});
