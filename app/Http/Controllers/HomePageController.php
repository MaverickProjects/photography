<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card;
use App\Portfolio;

class HomePageController extends Controller
{

    public function home()
    {
        $cards = Card::all();
        $portfolios = Portfolio::all();
        return view('welcome')->with([
            'cards' => $cards,
            'portfolios' => $portfolios,
         ]);
    }

    public function about()
    {
        return view('about');
    }

    public function portfolio()
    {
        return view('portfolio');
    }

    public function portfoliodetails()
    {
        return view('portfoliodetail');
    }
}
