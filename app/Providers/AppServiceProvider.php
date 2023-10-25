<?php

namespace App\Providers;

use Illuminate\Support\Facades\Http;
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
        Http::macro('discogs', function () {
            $apiKey = env('DISCOGS_API_KEY');
            $apiSecret = env('DISCOGS_API_SECRET');

            return Http::withHeaders([
                'Authorization' => "Discogs key={$apiKey}, secret={$apiSecret}"
            ])->baseUrl('https://api.discogs.com/database');
        });
    }
}
