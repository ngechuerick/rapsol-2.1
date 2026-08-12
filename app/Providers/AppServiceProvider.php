<?php

namespace App\Providers;

use App\Http\Controllers\ServicesController;
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
        /*
        | The navbar's Services dropdown is generated from the same array that
        | drives /services and /services/{slug}. Add a service in
        | ServicesController::allServices() and it appears in the nav
        | automatically — no view edits.
        |
        | This is the template for future dropdowns: add a composer here that
        | shares a [label => url] list, then reuse the <x-nav-dropdown> markup
        | in the navbar.
        */
        View::composer('components.navbar', function ($view) {
            $navServices = collect(ServicesController::allServices())
                ->map(fn ($service) => [
                    'label' => $service['title'],
                    'short' => $service['short'] ?? '',
                    'url'   => route('services.show', $service['slug']),
                    'slug'  => $service['slug'],
                ])
                ->values()
                ->all();

            $view->with('navServices', $navServices);
        });
    }
}
