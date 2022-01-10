<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use Schema;
use Carbon\Carbon;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
    if($this->app->environment('production')) {
    \URL::forceScheme('https');
}
        
        config(['app.locale' => 'id']);
        Carbon::setLocale('id');

       Blade::directive('rupiah', function ($expression) {
        return "Rp <?php echo number_format($expression, 0, ',', '.'); ?>";
    });

    

    }
}
