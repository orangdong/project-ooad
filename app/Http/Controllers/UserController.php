<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function index(){
        return view('homepageTouristConfirm');
    }

    public function forum(){
        return view('forum');
    }

    public function store_page(){
        return view('storePageTourist');
    }

    public function cart(){
        return view('cart');
    }

    public function payment_method(){
        return view('paymentMethodPage');
    }

    public function checkout(){
        return view('checkout');
    }

    public function logout(){
        Auth::logout();
        return redirect('');
    }
}
