<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Manager\Driver\QuoteFetcherInterface;
use App\Manager\QuoteFetcher;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class APIQuoteController extends Controller
{
    public function getQuotes(): string
    {
        return \json_encode(QuoteFetcher::fetchQuoteSet(5));
    }
}
