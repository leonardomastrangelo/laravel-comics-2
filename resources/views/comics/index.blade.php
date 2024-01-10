@extends('layouts.app')

@section('title', 'Comics')

@section('content')
    <section id="current-series" class="py-5">
        <div class="container py-5">
            <div id="tag-series">
                <span>
                    current series
                </span>
            </div>

            @if (session()->has('message'))
            <div class="alert alert-danger w-100 text-center">
                {{session('message')}}
            </div>
            @endif

            <form action="{{route('comics.index')}}" method="GET" class="d-flex align-items-end mb-5">
                <div class="w-25 me-3">
                    <label for="type" class="form-label text-white">
                        Search for Type : 
                    </label>

                    <select class="form-select" name="typology" id="typology">
                        <option value="all" {{ $typology == 'all' ? 'selected' : '' }}>All</option>
                        <option value="comic book" {{ $typology == 'comic book' ? 'selected' : '' }}>Comic Book</option>
                        <option value="graphic novel" {{ $typology == 'graphic novel' ? 'selected' : '' }}>Graphic Novel</option>
                    </select>
                </div>

                <div>
                    <label for="type" class="form-label text-white">
                        Search for Title : 
                    </label>

                    <input class="form-control" type="text" id="comic_title" name="comic_title">
                </div>

                <div>
                    <button type="submit" class="btn btn-primary ms-3">
                        Search
                    </button>
                </div>
            </form>

            <div class="row justify-content-center align-items-start">
                @foreach ($comics as $product)  
                <div class="col-6 col-md-4 col-xxl-2 mb-5 my_card text-center">
                    <div class="overflow-hidden">
                        <img 
                        src="{{$product->thumb}}" 
                        alt="{{$product->title}}">
                    </div>
                    <h2>
                        {{$product->series}}
                    </h2>
                    <div class="pt-2">
                        <span>{{$product->type}}</span>
                    </div>
                    <p class="py-2">
                        {!!substr($product->description,0,100) . '...'!!}
                    </p>
                    <a href="{{route('comics.show', $product->id)}}" class="btn btn-primary text-center w-100 mt-3">
                        View Details
                    </a>
                </div>
                @endforeach
            </div>

        </div>
    </section>

    <div class="add">
        <a href="{{route('comics.create')}}" class="btn text-bg-info">Add a Comic</a>
    </div>
@endsection