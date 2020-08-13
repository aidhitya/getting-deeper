<?php

namespace App\Providers;

use App\Billing\PaymentGateway;
use App\Billing\BankPaymentGateway;
use App\Billing\CreditPaymentGateway;
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
                return new CreditPaymentGateway('currecny');
            }
            return new BankPaymentGateway('currecny');
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
