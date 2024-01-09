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
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * 
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:2|max:100',
            'description' => 'required',
            'price' => 'required|min:5|max:20',
            'sale_date' => 'required|min:10|max:10',
            'series' => 'required|min:3|max:30',
            'type' => 'required|min:3|max:30',
        ]);
        $formData = $request->all();
        /**
         * METODO FAST
         */
        $newComic = Comic::create($formData);
        $newComic->thumb = 'https://picsum.photos/300';
        $newComic->save();

        /**
         * METODO SLOW
         */
        // $newComic = new Comic();
        // $newComic->thumb = 'https://picsum.photos/300/300';
        // $newComic->fill($formData);
        // $newComic->save();
        // dd($request->all());
        return to_route('comics.show', $newComic->id);
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
     * @return \Illuminate\View\View;
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * 
     */
    public function update(Request $request, Comic $comic)
    {
        $formData = $request->all();
        $comic->title = $formData['title'];
        $comic->thumb = 'https://picsum.photos/300/300';
        $comic->description = $formData['description'];
        $comic->price = $formData['price'];
        $comic->type = $formData['type'];
        $comic->sale_date = $formData['sale_date'];
        $comic->series = $formData['series'];
        $comic->update();
        // dd($request->all());
        return to_route('comics.show', $comic->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * 
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return to_route('comics.index')->with('message', "Il prodotto $comic->title è stato eliminato");
    }
}
