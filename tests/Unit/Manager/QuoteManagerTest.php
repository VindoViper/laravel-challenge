<?php

declare(strict_types=1);

namespace Tests\Unit\Manager;

use App\Manager\Driver\JsonFetcher;
use App\Manager\QuoteManager;
use Tests\TestCase;

class QuoteManagerTest extends TestCase
{
    public function test_manager_creates_json_fetcher(): void
    {
        $manager = new QuoteManager($this->app);

        self::assertInstanceOf(JsonFetcher::class, $manager->createDriver('json'));
    }
}
