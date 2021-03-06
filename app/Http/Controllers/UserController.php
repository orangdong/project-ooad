<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function index(){
        $auth = Auth::user();
        $seller = Seller::where('username', $auth->username)->with('store')->first();
        if($seller && !$seller->store){
            return redirect(route('create-store'));
        }
        if($seller && $seller->store){
            return view('homepagemsme');
        }
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
