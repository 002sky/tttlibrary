@extends('layouts.nav')

@section('content')

    <div class="container">
        <div class="row">
            <div class="category">
                <div class="header" data-aos="fade-up" data-aos-delay="100">
                    @if (isset($Books))
                        <h1 >Search Result for: {{ $term }}</h1>
                    @endif

                    @if (isset($categoryBook))
                        @if (!is_null($categoryBook))
                            @if (!empty($categoryBook->first()->ct))
                                <h1 >{{ $categoryBook->first()->ct }}</h1>
                            @else

                                <h1 >{{ $categoryName->category }}:This category dont have book yet</h1>
                            @endIf

                        @endif
                    @endif

                </div>
                <div class="items-container">

                    @if (isset($Books))
                        @foreach ($Books as $cb)
                            <div class="item">
                                <div class="book-image">
                                    <img src="{{ asset('images') }}/{{ $cb->image }}" alt="">
                                </div>
                                <div class="content">
                                    <input type="hidden" value="{{ $cb->id }}">
                                    <h1 class="book-title">{{ $cb->bookName }}</h1>
                                    <h3 class="book-writer">Written by: {{ $cb->aName }}</h3>
                                    <p class="book-description">{{ $cb->description }}</p>
                                    <p class="book-description">Book availability: {{ $cb->status }}</p>
                                    <p class="book-description">Published date: {{ $cb->publishingDate }}</p>
                                </div>
                                <a class="btn-borrow" href="{{ route('borrow', ['id' => $cb->id]) }}">Borrow</a>

                            </div>
                        @endforeach

                    @endIf

                    @if (isset($categoryBook))
                        @foreach ($categoryBook as $cb)
                            <div class="item">
                                <div class="book-image">
                                    <img src="{{ asset('images') }}/{{ $cb->image }}" alt="">

                                </div>
                                <div class="content">

                                    <h1 class="book-title">{{ $cb->bookName }}</h1>
                                    <h3 class="book-writer">Written by: {{ $cb->aName }}</h3>
                                    <p class="book-description">{{ $cb->description }}</p>
                                    <p class="book-description">Book availability: {{ $cb->status }}</p>
                                    <p class="book-description">Published date: {{ $cb->publishingDate }}</p>

                                </div>
                                <a class="btn-borrow" href="{{ route('borrow', ['id' => $cb->id]) }}">Borrow</a>
                            </div>
                        @endforeach
                    @endif



                </div>
            </div>
        </div>
        <!--==================== content end ====================-->
    @endsection
