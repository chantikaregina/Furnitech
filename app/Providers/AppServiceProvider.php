<?php

namespace App\Providers;

use App\Models\CompanyInfo;
use Illuminate\Support\Facades\View;
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
        //
        $companyInfo = CompanyInfo::first();

        View::share('companyInfo', $companyInfo);
    }
}
