<?php

declare(strict_types=1);

namespace App\Providers;

use App\Manager\QuoteManager;
use Illuminate\Support\ServiceProvider;

class QuoteFetcherServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('quote', function ($app) {
            return new QuoteManager($app);
        });
    }
}
