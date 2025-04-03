<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use App\Models\WhySection; // Add this to use the WhySection model
use App\Models\Service;
use App\Models\Team;
use App\Models\Client;

class HomeController extends Controller
{
    public function clearCache()
    {
        Artisan::call('view:clear');
        Artisan::call('route:clear');
        Artisan::call('config:clear');
        Artisan::call('cache:clear');
        Artisan::call('optimize:clear');
        return redirect()->back()->with('success', 'You have Successfully Cleared Cache!');
    }

    public function index()
    {
        $whySections = WhySection::all();  // Fetch Why section data
        $services = Service::all();        // Fetch Services data
        $teams = Team::all();              // Fetch Team data
        $clients = Client::all();          // Fetch Client data

        return view('frontend.index', compact('whySections', 'services', 'teams', 'clients')); // Pass data to the view
    }
}