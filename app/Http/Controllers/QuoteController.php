<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class QuoteController extends Controller
{
    public function getQuotes(): Factory|View
    {
        return view(
            'quote',
            ['quotes' => Quote::take(5)->orderBy('created_at', 'desc')->get()]
        );
    }
}
