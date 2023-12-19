<?php

declare(strict_types=1);

namespace App\Manager\Driver;

interface QuoteFetcherInterface
{
    public function fetchQuote(): array;

    public function fetchQuoteSet(int $numberOfQuotes): array;
}
