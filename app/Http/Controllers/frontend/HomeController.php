<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
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
        return view('frontend.index');
    }

}
