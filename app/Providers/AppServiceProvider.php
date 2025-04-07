<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\CompanyProfile;
use Illuminate\Support\Facades\Storage;
use App\Models\Aboutus;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Fetch the first record from Companyinfo and Company tables
        $companyProfile = CompanyProfile::first();
        $aboutus = Aboutus::first();
       


        // Share the variables globally with all views
        view()->share([
            'companyProfile' => $companyProfile,
            'logoUrl' => $companyProfile ? Storage::url($companyProfile->logo) : null,
            'faviconUrl' => $companyProfile ? Storage::url($companyProfile->favicon) : null,
            'company_name' => $companyProfile ? $companyProfile->company_name : null,
            'companyTagline' => $companyProfile ? $companyProfile->tagline : null,
            'companyDescription' => $companyProfile ? $companyProfile->description : null,
            'companyAddress' => $companyProfile ? $companyProfile->address : null,
            'companyPhone' => $companyProfile ? $companyProfile->phone : null,
            'companyEmail' => $companyProfile ? $companyProfile->email : null,
            'companyWebsite' => $companyProfile ? $companyProfile->website : null,
            'aboutus' => $aboutus,
           
        ]);
    }
}
