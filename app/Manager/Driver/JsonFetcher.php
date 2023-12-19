<?php

declare(strict_types=1);

namespace App\Manager\Driver;

use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Facades\Http;

class JsonFetcher implements QuoteFetcherInterface
{
    public function __construct(
        private readonly string $baseUrl,
    ) {
    }

    /**
     * @throws RequestException
     */
    public function fetchQuote(): array
    {
        $response = Http::get($this->baseUrl);
        if (false === $response->ok()) {
            $response->throw(\sprintf('Request to %s failed with response code %s', $this->baseUrl, $response->status()));
        }

        return \json_decode($response->body(), true);
    }

    /**
     * @throws RequestException
     */
    public function fetchQuoteSet(int $numberOfQuotes): array
    {
        $resultSet = [];
        for ($i = 0; $i < $numberOfQuotes; $i++) {
            $resultSet[] = $this->fetchQuote()['quote'];
        }

        return $resultSet;
    }
}
