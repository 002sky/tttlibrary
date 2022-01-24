@extends('layouts.nav')
@section('content')

    <!--============== opening section start ==============-->

    <div class="opening-section">
        <div class="layer"></div>
        <h1 data-aos="fade-up" data-aos-delay="100">Welcome to Library system</h1>
        <div class="scrolldown">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!--============== opening section start ==============-->



    <!--==============Start Carousel==============-->
    <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="carousel" id="home">
            <div class="carousel-01 owl-carousel owl-theme owl-loaded owl-drag">
                @foreach ($banner as $b)
                    <div class="slide" style="background-image:url('{{ asset('images') }}/{{ $b->bannerImage }}')">

                        <div class="slide-content">
                            <div class="carousel-text">
                                <h3>By: {{ $b->aName }}</h3>
                                <h1>{{ $b->bkName }}</h1>
                                <h2>{{ $b->desc }}</h2>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>
    <!--==========End Carousel==========-->

    <!--==========start Categories==========-->
    <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="categories" id="categories">
            <div class="category-header">
                <h1>Categories</h1>
            </div>
            <div class="category-container">
                @foreach ($categories as $c)
                    <a href="{{ route('categoryBook', ['id' => $c->id]) }}" class="category-item" data-aos="fade-up" data-aos-delay="{{$loop->index * 50}}">{{ $c->category }}</a>
                @endforeach

            </div>
        </div>
    </div>
    <!--==========End Categories==========-->

    <!--==================== latest book start ====================-->

    <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="latest-book" id="latest-book">
            <div class="latest-book-header ">
                <h1>Latest Book</h1>
            </div>
            <div class="latest-book-section-container card">

                <div class="left-section col-50" data-aos="fade-right" data-aos-delay="100">
                    <span></span>

                    <img src="@if (!empty($latest)){{ asset('images') }}/{{ $latest->image }} @endIf " alt="123">
                </div>
                <div class="right-section col-50" data-aos="fade-left" data-aos-delay="100">
                    @if (!empty($latest))
                        <h3>Writed By : {{ $latest->bookName }} </h3>
                        <p>Published in {{ $latest->publishingDate }}</p>
                        <h1>{{ $latest->bookName }}</h1>
                        <p>{{ $latest->description }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!--==================== latest book end ====================-->

    <!--==================== Contact Us start ====================-->

    <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="contact-us" id="contact-us">
            <div class="contact-us-header ">
                <h1>Contact Us</h1>
            </div>
            <div class="contact-us-container">
                <div class="glass">

                    <div class="contact-us-card" data-aos="fade-left" data-aos-delay="100">
                        <div class="icon"><i class="fab fa-facebook-f"></i></div>
                        <h3>TTT_Library_FB</h3>
                        <a href="">Ask me</a>
                    </div>
                    <div class="contact-us-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="fas fa-envelope"></i></div>
                        <h3>TTT_Library_Email@gamil.com</h3>
                        <a href="">Ask me</a>
                    </div>
                    <div class="contact-us-card" data-aos="fade-right" data-aos-delay="100">
                        <div class="icon"><i class="fas fa-phone-alt"></i></div>
                        <h3>016-71234565</h3>
                        <a href="">Ask me</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--==================== Contact Us end ====================-->

    <!--==================== About Us start ====================-->

    <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="about-us" id="about-us">
            <div class="about-us-header ">
                <h1>About Us</h1>
            </div>
            <div class="about-us-container">
                <div class="left-section col-50"><img src="{{ asset('images/about-us.jpg') }}" alt="" data-aos="fade-right" data-aos-delay="100"></div>
                <div class="right-section col-50" data-aos="fade-left" data-aos-delay="100">
                    <div class="content">
                        <h3>Introduction</h3>
                        <h1>Our feature</h1>
                        <p>Our library provides many different kinds of books such as science fiction, history books,
                            poetry books and etc. These books can meet the needs of students for academic research and
                            cultivate their interest in reading habits and research. In addition, we will also regularly
                            introduce newly published books, so that readers are not easily bored with the books in our
                            library.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================== About Us end ====================-->

@endsection
