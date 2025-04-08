<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Aboutus;
use App\Models\CompanyProfile;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $companyProfile = CompanyProfile::all(); // Retrieve the first profile
        $aboutus = Aboutus::all() ; // Returns an empty model if not found
        return view('frontend.about', compact('companyProfile', 'aboutus'));
    }
}
