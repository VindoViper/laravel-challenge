<?php

declare(strict_types=1);

namespace Tests\Unit\Manager\Driver;

use App\Manager\Driver\JsonFetcher;
use GuzzleHttp\Psr7\Response as GuzzleResponse;
use Illuminate\Http\Client\RequestException;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class JsonFetcherTest extends TestCase
{
    public function test_fetch_quote_returns_result_array(): void
    {
        Http::shouldReceive('get')->andReturn(new Response(new GuzzleResponse(200, [], '{"quote": "lorem ipsum dolor sit amet"}')));

        $fetcher = new JsonFetcher('http://localhost');
        $result = $fetcher->fetchQuote();
        self::assertSame("lorem ipsum dolor sit amet", $result['quote']);
    }

    public function test_fetch_quote_throws_on_error(): void
    {
        Http::shouldReceive('get')->andReturn(new Response(new GuzzleResponse(500, [], 'Internal server error')));

        $this->expectException(RequestException::class);
        $this->expectExceptionMessage('HTTP request returned status code 500');

        $fetcher = new JsonFetcher('http://localhost');
        $result = $fetcher->fetchQuote();
        self::assertSame("lorem ipsum dolor sit amet", $result['quote']);
    }

    public function test_fetch_quote_set_returns_result_array(): void
    {
        Http::shouldReceive('get')->times(5)->andReturn(new Response(new GuzzleResponse(200, [], '{"quote": "lorem ipsum dolor sit amet"}')));

        $fetcher = new JsonFetcher('http://localhost');
        $result = $fetcher->fetchQuoteSet(5);
        foreach ($result as $resultingQuote) {
            self::assertSame("lorem ipsum dolor sit amet", $resultingQuote);
        }
    }
}
