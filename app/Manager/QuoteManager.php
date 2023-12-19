<?php

declare(strict_types=1);

namespace App\Manager;

use App\Manager\Driver\JsonFetcher;
use App\Manager\Driver\QuoteFetcherInterface;
use Illuminate\Support\Manager;

class QuoteManager extends Manager
{
    public function getDefaultDriver(): string
    {
        return 'json';
    }

    public function createDriver($driver = null): QuoteFetcherInterface
    {
        return match($driver) {
            'json' => new JsonFetcher($this->container['config']['app']['clients']['kanye']['base_url']),
        };
    }
}
