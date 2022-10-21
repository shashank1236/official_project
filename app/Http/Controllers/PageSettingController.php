<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageSettingController extends Controller
{
    // Landing Page
    public function landingSlider() {
        return view('admin.landingSlider');
    }

}
