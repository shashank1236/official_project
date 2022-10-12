<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminLogin(Request $request) {
        $data = $request->input();
		if(password_verify($data["password"], "$2y$10$/bpegRy/BpBpXB5Z1n8ADuu8At7jS.qu/wm1uT.AC2K/us.I7mu0y")) {
		    // If the password inputs matched the hashed password in the database
		    echo "Password verified";
		} 
	}

}
