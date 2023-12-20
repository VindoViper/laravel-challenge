<?php

declare(strict_types=1);

namespace App\Manager;

use Illuminate\Support\Facades\Facade;

class QuoteFetcher extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'quote';
    }
}
