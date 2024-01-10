<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;

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
    public function store(StoreComicRequest $request)
    {
        //! potrai cancellare $request e $formData = $request->all();
        $request->validate([
            'title' => 'required|min:2|max:100',
            'description' => 'required',
            'price' => 'required|min:5|max:20',
            'sale_date' => 'required|date_format:Y-m-d',
            'series' => 'required|min:3|max:30',
            'type' => 'required|min:3|max:30',
        ]);
        $formData = $request->all();

        //? $formData = $this->validation($request->all());

        //* $formData = $request->validated()

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
    public function update(UpdateComicRequest $request, Comic $comic)
    {
        //! potrai cancellare $request e $formData = $request->all();
        $request->validate([
            'title' => 'required|min:2|max:100',
            'description' => 'required',
            'price' => 'required|min:5|max:20',
            'sale_date' => 'required|date_format:Y-m-d',
            'series' => 'required|min:3|max:30',
            'type' => 'required|min:3|max:30',
        ]);
        $formData = $request->all();

        //? $formData = $this->validation($request->all());

        //* THIS!!! $formData = $request->validated()

        $comic->thumb = 'https://picsum.photos/300/300';
        $comic->fill($formData);
        $comic->update();
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
        return to_route('comics.index')->with('message', "Il prodotto : '$comic->title' è stato eliminato");
    }

    //! metodo meno efficace perchè sporca il controller
    /**
     * Validate received data and make customized error messages
     * @return $validator
     */
    // private function validation($data)
    // {
    //     $validator = Validator::make(
    //         $data,
    //         [
    //             'title' => 'required|min:2|max:100',
    //             'description' => 'required',
    //             'price' => 'required|min:5|max:20',
    //             'sale_date' => 'required|date_format:Y-m-d',
    //             'series' => 'required|min:3|max:30',
    //             'type' => 'required|min:3|max:30',
    //         ],
    //         [
    //             'title.required' => 'Il campo title è obbligatorio',
    //             'title.min' => 'Il campo title deve avere :min caratteri',
    //             'title.max' => 'Il campo title deve avere :max caratteri',
    //             'description.required' => 'Il campo description è obbligatorio',
    //             'price.required' => 'Il campo price è obbligatorio',
    //             'price.min' => 'Il campo price deve avere :min caratteri',
    //             'price.max' => 'Il campo price deve avere :max caratteri',
    //             'sale_date.required' => 'Il campo price è obbligatorio',
    //             'sale_date.date_format' => 'Il campo sale_date non segue la formattazione :date_format',

    //             // continua
    //         ]
    //     )->validate();

    //     return $validator;
    // }
}
