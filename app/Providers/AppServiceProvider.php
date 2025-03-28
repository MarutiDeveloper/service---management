<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;


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
       
        
       


        // Share the variables globally with all views
        view()->share([
            
            
           
        ]);
    }
}
