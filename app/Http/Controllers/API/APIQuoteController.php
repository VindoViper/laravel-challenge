<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Manager\QuoteFetcher;
use App\Models\Quote;
use Symfony\Component\HttpFoundation\Response;

class APIQuoteController extends Controller
{
    public function getQuotes(): string
    {
        $quotes = Quote::take(5)
                    ->orderBy('created_at', 'desc')
                    ->get();

        return \json_encode($quotes);
    }

    public function refreshQuotes(): Response
    {
        $nextQuoteSet = QuoteFetcher::fetchQuoteSet(5);
        foreach ($nextQuoteSet as $newQuote) {
            $quote = new Quote();
            $quote->text = $newQuote;

            $quote->save();
        }

        return response()->noContent(Response::HTTP_CREATED);
    }
}
