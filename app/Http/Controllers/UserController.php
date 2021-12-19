<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
