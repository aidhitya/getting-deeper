<?php

namespace App\Providers;

use App\Billing\PaymentGateway;
use App\Billing\BankPaymentGateway;
use App\Billing\CreditPaymentGateway;
use App\Channel;
use App\View\Composers\ChannelComposer;
use Illuminate\Support\Facades\View;
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
        $this->app->singleton(PaymentGateway::class, function ($app) {
            if (request()->has('credit')) {
                return new CreditPaymentGateway('currency');
            }
            return new BankPaymentGateway('currency');
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Option 2
        // View::share('channels', Channel::orderBy('name')->get());

        // Option 3
        // View::composer(['shopping.*', 'inventory.list'], function ($view) {
        //     $view->with('channels', Channel::orderBy('name')->get());
        // });

        // view()->composer(['shopping.*', 'inventory.list'], function ($view) {
        //     $view->with('channels', Channel::orderBy('name')->get());
        // });

        // Option 4
        // View::composer(['shopping.*', 'inventory.list'], ChannelComposer::class);

        // Option 5
        View::composer('partials.channels.*', ChannelComposer::class);
    }
}
