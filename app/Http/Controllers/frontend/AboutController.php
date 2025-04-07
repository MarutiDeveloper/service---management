<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CompanyProfile;
use App\Models\Aboutus;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $companyProfile = CompanyProfile::all(); // Retrieve the first profile
        $aboutus = Aboutus::all(); // Retrieve the first about us
        return view('frontend.about', compact('companyProfile', 'aboutus'));
    }
}
