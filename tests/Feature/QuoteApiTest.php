<?php

namespace Tests\Feature;

use App\Manager\Driver\QuoteFetcherInterface;
use App\Models\Quote;
use Mockery\MockInterface;
use Tests\TestCase;

class QuoteApiTest extends TestCase
{
    public function test_the_application_returns_a_successful_response(): void
    {
        $quote = new Quote();
        $quote->text = 'lorem ipsum dolor sit amet';
        $quote->save();

        $response = $this->get('/api/quotes', ['Authorization' => sprintf('Bearer %s', self::DEFAULT_API_TOKEN)]);

        $response->assertStatus(200);
        self::assertStringContainsString($quote->text, $response->content());
    }

    public function test_the_application_stores_new_quotes(): void
    {
        $this->swap(QuoteFetcherInterface::class, function(MockInterface $fetcherMock) {
            $fetcherMock->expects('fetchQuoteSet')->andReturns([
                'All the musicians will be free',
                'I give up drinking every week',
                'I hate when I\'m on a flight and I wake up with a water bottle next to me like oh great now I gotta be responsible for this water bottle',
                'Culture is the most powerful force in humanity under God',
                'If I got any cooler I would freeze to death',
            ]);
        });

        $response = $this->post('/api/refresh-quotes', [], ['Authorization' => sprintf('Bearer %s', self::DEFAULT_API_TOKEN)]);

        $response->assertStatus(201);
        $stored = Quote::all();
        self::assertCount(5, $stored);
    }
}
