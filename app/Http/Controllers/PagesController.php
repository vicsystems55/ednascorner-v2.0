<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){

        return view('frontend.index');
    }
    public function shop(){

        return view('frontend.shop');
    }
    public function cart(){

        return view('frontend.cart');
    }
    public function checkout(){

        return view('frontend.checkout');
    }
    public function login(){

        return view('auth.login');
    }
    public function signUp(){

        return view('frontend.signUp');
    }
    public function product(){

        return view('frontend.product');
    }
    public function ok(){

        return view('frontend.ok');
    }
    public function aboutUs(){

        return view('frontend.aboutUs');
    }
    public function contactUs(){

        return view('frontend.contactUs');
    }
    public function accountHome(){

        return view('frontend.accountHome');
    }
    public function accountMyOrders(){

        return view('frontend.accountMyOrders');
    }
    public function accountProfile(){

        return view('frontend.accountProfile');
    }
    public function accountSettings(){

        return view('frontend.accountSettings');
    }

    public function userDashboard(){

        return view('user_dashboard.index');
    }

}
