<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\Session;	
// use App\Models\Admin;

class AdminController extends Controller
{
    public function landingSlider() {
        return view('admin.admin_login');
    }

    public function adminLogin(Request $request) {
    	$this->validate($request, [
            'username_email' => 'required',
            'password' => 'required',
        ]);
        $data = $request->input();
        $response = 200;
        $attemptWithUserName = ['username' => $data['username_email'], 'password' => $data['password']];
        $attemptWithEmail = ['email' => $data['username_email'], 'password' => $data['password']];
        if(auth()->guard('admin')->attempt($attemptWithUserName) || auth()->guard('admin')->attempt($attemptWithEmail)){
            $user = auth()->guard('admin')->user();
            $response = 200;
        }else {
            $response = 101;
        }
        return $response;
	}

    public function adminDashboardView() {
        return view('admin.admin_dashboard');
    }
}
