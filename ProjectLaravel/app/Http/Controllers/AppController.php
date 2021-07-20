<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class AppController extends Controller
{
    public function index(){
        return view('index');
    }
    public function About(){
        return view('About');
    }
    public function CheckoutSuccessful(){
        return view('CheckoutSuccessful');
    }
    public function Confirmation(){
        return view('Confirmation');
    }
    public function Contact(){
        return view('Contact');
    }
    public function DeliveryMethods(){
        return view('DeliveryMethods');
    }
    public function Error404(){
        return view('Error404');
    }
    public function ListProducts(){
        return view('ListProducts');
    }
    public function LoginForm(){
        return view('LoginForm');
    }
    public function PaymentMethods(){
        return view('PaymentMethods');
    }
    public function ProductDetails(){
        return view('ProductDetails');
    }
    public function Products_a4Columns(){
        return view('Products_a4Columns');
    }
    public function ShoppingCart(){
        return view('ShoppingCart');
    }
}
