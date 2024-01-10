@extends('layouts.app')

@section('title', "Comic Create")

@section('content')
    <main class="details">

        <div id="jumbo">
        </div>

        <section id="comic_info" class="container">
            <h2 class="text-center display-1 py-4">add a new comic</h2>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>
                            {{$error}}
                        </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{route('comics.store')}}" method="POST">
                {{-- token --}}
                @csrf

                <div class="input-group my-3 d-flex flex-column justify-content-center align-items-center">
                    <label for="title" class="form-label">
                        Insert Title
                    </label>
                    <input type="text" class="form-control w-50 @error('title') is-invalid @enderror" id="title" name="title" placeholder="Una notte da leoni" required value="{{old('title')}}">
                    @error('title')
                    <div class="invalid-feedback text-center">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="input-group my-4 d-flex flex-column justify-content-center align-items-center">
                    <label for="thumb" class="form-label">
                        Insert Image Url
                    </label>
                    <input type="text" class="form-control w-50" id="thumb" name="thumb" value="https://picsum.photos/seed/picsum/300/300 @error('thumb') is-invalid @enderror">
                    @error('thumb')
                    <div class="invalid-feedback text-center">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="input-group my-4 d-flex flex-column justify-content-center align-items-center">
                    <label for="description" class="form-label">
                        Insert Description
                    </label>
                    <textarea class="w-75 @error('description') is-invalid @enderror" rows="8" id="description" name="description" required>
                        {{old('description')}}
                    </textarea>
                    @error('description')
                    <div class="invalid-feedback text-center">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="input-group my-4 d-flex flex-column justify-content-center align-items-center">
                    <label for="price" class="form-label">
                        Insert Price
                    </label>
                    <input type="text" class="form-control w-25 @error('price') is-invalid @enderror" id="price" name="price" placeholder="$4.99" required value="{{old('price')}}">
                    @error('price')
                    <div class="invalid-feedback text-center">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="input-group my-4 d-flex flex-column justify-content-center align-items-center">
                    <label for="type" class="form-label">
                        Insert Type
                    </label>
                    <select name="type" id="type" class="form-select w-25">
                         <option {{(old('type') == 'comic book') ? 'selected' : ''}} value="comic book">Comic Book</option>
                        <option {{(old('type') == 'graphic novel') ? 'selected' : ''}} value="graphic novel">Graphic Novel</option>
                    </select>
                    @error('type')
                    <div class="invalid-feedback text-center">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="input-group my-4 d-flex flex-column justify-content-center align-items-center">
                    <label for="sale_date" class="form-label">
                        Insert Date
                    </label>
                    <input type="text" class="form-control w-25 @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" placeholder="2020-01-07" value="{{old('sale_date')}}">
                    @error('sale_date')
                    <div class="invalid-feedback text-center">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="input-group my-4 d-flex flex-column justify-content-center align-items-center">
                    <label for="series" class="form-label">
                        Insert Series
                    </label>
                    <input type="text" class="form-control w-25 @error('series') is-invalid @enderror" id="series" name="series" placeholder="Marvel" required value="{{old('series')}}">
                    @error('series')
                    <div class="invalid-feedback text-center">
                        {{$message}}
                    </div>
                    @enderror
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