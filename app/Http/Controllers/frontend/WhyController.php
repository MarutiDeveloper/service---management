<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WhySection;

class WhyController extends Controller
{
    public function index()
    {
        $whySections = WhySection::all();
        return view('frontend.why', compact('whySections'));
    }

}
