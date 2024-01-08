<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class HomeController extends Controller
{
    public function index()
    {
        $comics = Comic::all();
        $options_links = [
            [
                'image' => 'buy-comics-digital-comics.png',
                'title' => 'digital comics'
            ],
            [
                'image' => 'buy-comics-merchandise.png',
                'title' => 'dc merchandise'
            ],
            [
                'image' => 'buy-comics-subscriptions.png',
                'title' => 'subscriptions'
            ],
            [
                'image' => 'buy-comics-shop-locator.png',
                'title' => 'comic shop locator'
            ],
            [
                'image' => 'buy-dc-power-visa.svg',
                'title' => 'comic shop locator'
            ],
        ];
        $jumbo_links = [
            'dc comics' => [
                'characters',
                'comics',
                'movies',
                'TV',
                'games',
                'videos',
                'news',
            ],
            'dc' => [
                'terms of use',
                'privacy policy (new)',
                'ad choises',
                'advertising',
                'jobs',
                'subscriptions',
                'talent workshops',
                'CPSC certificates',
                'ratings',
                'shop help',
                'contact us',
            ],
            'sites' => [
                'DC',
                'MAD magazine',
                'DC kids',
                'DC universe',
                'DC power visa'

            ],
            'shop' => [
                'shop DC',
                'shop DC collectibles',
            ],
        ];
        return view('home', compact('comics', 'options_links', 'jumbo_links'));
    }
}
