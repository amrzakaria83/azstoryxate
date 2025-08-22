<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Setting;

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
        $Setting = Setting::find(1);
        view()->share('settings', $Setting);

        if (!session()->get('locale')) {
            session()->put('locale', 'ar');
        }
    }
}
