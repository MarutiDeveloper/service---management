<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CompanyProfile;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $companyProfile = CompanyProfile::all(); // Retrieve the first profile
        return view('frontend.service', compact('companyProfile'));
        
    }

}
