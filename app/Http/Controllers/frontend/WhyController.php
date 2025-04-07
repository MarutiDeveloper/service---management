<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WhySection;
use App\Models\CompanyProfile;

class WhyController extends Controller
{
    public function index()
    {
        $whySections = WhySection::all();
        $companyProfile = CompanyProfile::all(); // Retrieve the first profile
        return view('frontend.why', compact('whySections', 'companyProfile'));
    }

}
