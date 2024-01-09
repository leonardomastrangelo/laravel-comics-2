@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    <section id="jumbo">
    </section>

    <section id="current-series">
        <div class="container">
            <div id="tag-series">
                <span>
                    current series
                </span>
            </div>

            <div class="row justify-content-center align-items-start">
                @foreach ($comics as $key=>$product)  
                <div class="col-6 col-md-4 col-xl-2 mb-5">
                    <div class="overflow-hidden">
                        <a href="{{route('comics.show', $key + 1)}}">
                            <img
                            src="{{$product['thumb']}}"
                            alt="{{$product['title']}}">
                        </a>
                    </div>
                    <h2>
                        {{$product['series']}}
                    </h2>
                </div>
                @endforeach
            </div>

            <div class="d-flex justify-content-center align-items-center">
                <a href="{{route('comics.index')}}">
                    load more
                </a>
            </div>
        </div>
    </section>

    <section id="options">
        <div class="container">
            <div class="row justify-content-around align-items-center">
                @foreach ($options_links as $link)
                <div class="col-2 d-flex justify-content-center align-items-center">
                    <img 
                    src="/img/{{$link['image']}}" 
                    alt="{{$link['title']}}"
                    class="opt">
                    <h3>
                        {{$link['title']}}
                    </h3>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="jumbo_2">
        <div class="container">
            <div class="row">
                <div class="col-7 d-flex flex-wrap">
                    @foreach ($jumbo_links as $key=>$link)
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

    <div class="add">
        <a href="{{route('comics.create')}}" class="btn text-bg-info">Add a Comic</a>
    </div>
</main>
@endsection
