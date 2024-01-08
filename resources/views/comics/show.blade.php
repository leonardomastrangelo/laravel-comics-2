@extends('layouts.app')

@section('title', "Product Details")

@section('content')
    <main class="details">

        <div id="jumbo">
        </div>
        <div class="img-container">
            <div class="container position-relative">
                <div class="img-card">
                    <img id="comic" src="{{$comic->thumb}}" alt="">
                    <span>comic book</span>
                    <div>view gallery</div>
                </div>
            </div>
        </div>

        <section id="comic_info" class="container">
            <div class="row justify-content-between">
                <div class="col-7">
                    <h2>
                        {{$comic->title}}
                    </h2>
                    <div class="info_badge row">
                        <div class="col-8 d-flex justify-content-between align-items-center">
                            <div class="p-3">
                                <span class="low-color">U.S. Price: </span>
                                <span class="text-light">{{$comic->price}}</span>
                            </div>
                            <div class="text-uppercase low-color p-3">
                                available
                            </div>
                        </div>
                        <div class="col-4 text-light p-3 text-center">
                            Check Availability <i class="fa-solid fa-caret-down"></i>
                        </div>
                    </div>
                    <p>
                        {{ $comic->description}}
                    </p>
                </div>
                <div class="col-4 d-flex align-items-center">
                    <div class="position-relative">
                        <h4>advertisement</h4>
                        <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </section>

        {{-- <section id="specifics">
            <div class="container pb-5 mb-5">
                <div class="row justify-content-between">
                    <div class="col-6">
                        <h4>Talent</h4>
                        <div class="row flex-wrap border_top border_bottom py-3">
                            <div class="col-4 border_bottom">
                                <h5>Art by:</h5>
                            </div>
                            <div class="col-8 border_bottom pb-3">
                                @foreach ($artby as $person)
                                    <a href="#">
                                        {{$person . ', '}}
                                    </a>
                                @endforeach
                            </div>
                            <div class="col-4 pt-3">
                                <h5>Written by:</h5>
                            </div>
                            <div class="col-8 pt-3">
                                @foreach ($writtenby as $person)
                                    <a href="#">
                                        {{$person . ', '}}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-5">
                        <h4>Specs</h4>
                        <div class="row flex-wrap border_bottom border_top">
                            <div class="col-4 border_bottom py-3">
                                <h5>Series:</h5>
                            </div>
                            <div class="col-8 border_bottom py-3">
                                <a class="text-uppercase" href="#">action comics</a>
                            </div>
                            <div class="col-4 border_bottom py-3">
                                <h5>U.S. Price:</h5>
                            </div>
                            <div class="col-8 border_bottom py-3">
                                {{$product['price']}}
                            </div>
                            <div class="col-4 py-3">
                                <h5>On Sale Date:</h5>
                            </div>
                            <div class="col-8 py-3">
                                {{$product['sale_date']}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-links">
                <div class="container">
                    <div class="row">
                        <div class="col-3 d-flex justify-content-between alig-items-center py-3">
                            <div class="list-title">
                                digital comics
                            </div>
                            <div>
                                <i class="fa-solid fa-mobile"></i>
                            </div>
                        </div>
                        <div class="col-3 d-flex justify-content-between alig-items-center py-3">
                            <div class="list-title">
                                shop dc
                            </div>
                            <div>
                               <i class="fa-solid fa-address-card"></i>
                            </div>
                        </div>
                        <div class="col-3 d-flex justify-content-between alig-items-center py-3">
                            <div class="list-title">
                                comic shop locator
                            </div>
                            <div>
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                        </div>
                        <div class="col-3 d-flex justify-content-between alig-items-center py-3">
                            <div class="list-title">
                                subscription
                            </div>
                            <div>
                                <i class="fa-solid fa-shirt"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        {{-- <section id="jumbo_2"> --}}
        {{-- <div class="container">
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
        </div> --}}
    </section>
    </main>
@endsection