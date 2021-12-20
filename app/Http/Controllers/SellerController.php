<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellerController extends Controller
{
    public function index(){
        $auth = Auth::user();
        $seller = Seller::where('username', $auth->username)->with('store')->first();
        if($seller && !$seller->store){
            return redirect(route('create-store'));
        }
        return view('homepagemsme');
    }
    public function create()
    {
        return view('create-store');
    }

    public function forum(){
        return view('forummsme');
    }

    public function storepage(){
        return view('storePageMsmeNotif');
    }

    public function managestore(){
        return view('manageStore');
    }

    public function orderpage(){
        return view('orderpage');
    }

    public function store(Request $request){
        $auth = Auth::user();
        $seller = Seller::where('username', $auth->username)->first();
        $data = [
            'seller_id' => $seller->id,
            'name' => $request->name,
            'description' => $request->description,
        ];

        Store::create($data);

        return redirect('/dashboard/seller/managestore');
    }
}
