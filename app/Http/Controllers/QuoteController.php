<?php

namespace App\Http\Controllers;

use App\Manager\Driver\QuoteFetcherInterface;
use App\Manager\QuoteFetcher;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class QuoteController extends Controller
{
    public function getQuotes(): Factory|View
    {
        return view(
            'quote',
            ['quotes' => QuoteFetcher::fetchQuoteSet(5)]
        );
    }
}
