@extends('layouts.app')

@section('title', "Comic Edit")

@section('content')
    <main class="details">

        <div id="jumbo">
        </div>

        <section id="comic_info" class="container">
            <h2 class="text-center display-1 py-4">Edit : {{$comic->title}}</h2>
            <form action="{{route('comics.update', $comic->id)}}" method="POST">
                {{-- token --}}
                @csrf
                @method('PUT')
                <div class="input-group my-3 d-flex flex-column justify-content-center align-items-center">
                    <label for="title" class="form-label">
                        Insert Title
                    </label>
                    <input value="{{old('title', $comic->title)}}" type="text" class="form-control w-50" id="title" name="title" placeholder="Una notte da leoni" required>
                </div>

                {{-- <div class="input-group my-4 d-flex flex-column justify-content-center align-items-center">
                    <label for="thumb" class="form-label">
                        Insert Image Url
                    </label>
                    <input type="text" class="form-control w-50" id="thumb" name="thumb" placeholder="https://picsum.photos/seed/picsum/300/300">
                </div> --}}

                <div class="input-group my-4 d-flex flex-column justify-content-center align-items-center">
                    <label for="description" class="form-label">
                        Insert Description
                    </label>
                    <textarea class="w-75 p-3" rows="8" id="description" name="description" required>
                        {{old('description', $comic->description)}}
                    </textarea>
                </div>

                <div class="input-group my-4 d-flex flex-column justify-content-center align-items-center">
                    <label for="price" class="form-label">
                        Insert Price
                    </label>
                    <input type="text" class="form-control w-25" id="price" name="price" placeholder="$4.99" required value="{{old('price', $comic->price)}}">
                </div>

                <div class="input-group my-4 d-flex flex-column justify-content-center align-items-center">
                    <label for="type" class="form-label">
                        Insert Type
                    </label>
                    <input type="text" class="form-control w-25" id="type" name="type" placeholder="Action" required value="{{old('type', $comic->type)}}" >
                </div>

                <div class="input-group my-4 d-flex flex-column justify-content-center align-items-center">
                    <label for="sale_date" class="form-label">
                        Insert Date
                    </label>
                    <input type="text" class="form-control w-25" id="sale_date" name="sale_date" placeholder="2020-01-07" value="{{old('sale_date', $comic->sale_date)}}">
                </div>
                <div class="input-group my-4 d-flex flex-column justify-content-center align-items-center">
                    <label for="series" class="form-label">
                        Insert Series
                    </label>
                    <input type="text" class="form-control w-25" id="series" name="series" placeholder="Marvel" required value="{{old('series', $comic->series)}}" >
                </div>

                <div class="text-center py-4">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            </form>
        </section>

        <section id="jumbo_2">
            <div class="container">
            <div class="row">
                <div class="col-7 d-flex flex-wrap">
                    @foreach (config('comics.jumbo_links') as $key=>$link)
                    <div class="col-4 mb-3">
                        <h3>
                            {{$key}}
                        </h3>
                        <ul>
                            @foreach ($link as $anchor)
                            <li>
                                <a href="#">
                                    {{$anchor}}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @if ($loop->last)
                    <div id="rights">
                        All Site Content TM and @ 2020 DC Entertainment, unless otherwise <a href="#">noted here</a>. All rights reserved. <a href="#">Cookies Settings</a>
                    </div>
                    @endif
                    @endforeach
                </div>
                <div class="col-5">
                    <div>
                        <img src="{{Vite::asset('resources/img/dc-logo-bg.png')}}" alt="logo">
                    </div>
                </div>
            </div>
            </div>
        </section>
    </section>
    </main>
@endsection