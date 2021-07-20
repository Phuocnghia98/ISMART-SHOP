<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

    // $allPL = DB::table('productlines')->get()->toArray();
    // $allPLTitle = array_column($allPL, 'product_line');
    // echo '<pre>';
    // var_dump($allPLTitle);
    // echo '</pre>';

    // dd($allPLTitle[array_rand($allPLTitle, 1)]);

    // $allOF = DB::table('offices')->get()->toArray();
    // $allOFCode = array_column($allOF, 'office_code');
    // echo '<pre>';
    // var_dump($allOFCode);
    // echo '</pre>';

    // dd($allOFCode[array_rand($allOFCode, 1)]);

    $allCM = DB::table('customers')->get()->toArray();
    $allCMNumber = array_column($allCM, 'customer_number');
    echo '<pre>';
    var_dump($allCMNumber);
    echo '</pre>';

    dd($allCMNumber[array_rand($allCMNumber, 1)]);

    return view('welcome');
}
);

Route::get('index', 'App\Http\Controllers\AppController@index')->name('index');
Route::get('About', 'App\Http\Controllers\AppController@About')->name('About');
Route::get('CheckoutSuccessful', 'App\Http\Controllers\AppController@CheckoutSuccessful')->name('CheckoutSuccessful');
Route::get('Confirmation', 'App\Http\Controllers\AppController@Confirmation')->name('Confirmation');
Route::get('Contact', 'App\Http\Controllers\AppController@Contact')->name('Contact');
Route::get('DeliveryMethods', 'App\Http\Controllers\AppController@DeliveryMethods')->name('DeliveryMethods');
Route::get('Error404', 'App\Http\Controllers\AppController@Error404')->name('Error404');
Route::get('ListProducts', 'App\Http\Controllers\AppController@ListProducts')->name('ListProducts');
Route::get('LoginForm', 'App\Http\Controllers\AppController@LoginForm')->name('LoginForm');
Route::get('PaymentMethods', 'App\Http\Controllers\AppController@PaymentMethods')->name('PaymentMethods');
Route::get('ProductDetails', 'App\Http\Controllers\AppController@ProductDetails')->name('ProductDetails');
Route::get('Products_a4Columns', 'App\Http\Controllers\AppController@Products_a4Columns')->name('Products_a4Columns');
Route::get('ShoppingCart', 'App\Http\Controllers\AppController@ShoppingCart')->name('ShoppingCart');



Route::get('test', function () {
    return view('index');
});
