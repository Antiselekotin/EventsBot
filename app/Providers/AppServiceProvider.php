<?php

namespace App\Providers;

use App\Models\Links;
use App\Models\Participants;
use App\Observers\LinksObserver;
use App\Observers\ParticipantsObserver;
use Illuminate\Support\ServiceProvider;

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
        Participants::observe(ParticipantsObserver::class);
        Links::observe(LinksObserver::class);
    }
}
