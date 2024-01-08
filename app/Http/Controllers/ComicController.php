<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View;
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View;
     */
    public function create()
    {
        // inserire nuovo fumetto in db
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
        return view('comics.create', compact('jumbo_links'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * 
     */
    public function store(Request $request)
    {
        $formData = $request->all();
        $newComic = new Comic();
        $newComic->title = $formData['title'];
        $newComic->thumb = 'https://picsum.photos/seed/picsum/300/300';
        $newComic->description = $formData['description'];
        $newComic->price = $formData['price'];
        $newComic->type = $formData['type'];
        $newComic->sale_date = $formData['sale_date'];
        $newComic->series = $formData['series'];
        $newComic->save();
        // dd($request->all());
        return to_route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\View\View;
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //
    }
}
