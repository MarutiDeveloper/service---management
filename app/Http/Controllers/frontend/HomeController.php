<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Team;
use App\Models\WhySection;
use App\Models\Service;
use App\Models\CompanyProfile;
use App\Models\Aboutus;
use Illuminate\Support\Facades\Storage;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class HomeController extends Controller
{
    
    public function clearCache()
    {
        Artisan::call('view:clear');
        Artisan::call('route:clear');
        Artisan::call('config:clear');
        Artisan::call('cache:clear');
        Artisan::call('optimize:clear');
        return redirect()->back()->with('success', 'You have Successfully Cashclear !');
    }
    public function index()
    {
        $clients = Client::all();
        $teams = Team::all();
        $whySections = WhySection::all();
        $services = Service::all();
        $companyProfile = CompanyProfile::all(); // Retrieve the first profile
        $aboutus = Aboutus::all(); // Retrieve the first about us
        return view('frontend.index', compact('clients', 'teams', 'whySections', 'services', 'companyProfile', 'aboutus'));
    }
}
