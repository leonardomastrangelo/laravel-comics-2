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

            <div class="row justify-content-center align-items-start">
                @foreach ($comics as $product)  
                <div class="col-6 col-md-4 col-xxl-2 mb-5">
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
                    <a href="{{route('comics.show', $product->id)}}" class="btn btn-primary my-3">
                        View Details
                    </a>
                </div>
                @endforeach
            </div>

        </div>
    </section>
@endsection