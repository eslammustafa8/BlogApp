@extends('theme.master')
@section('titel', 'index')
@section('home-active', 'active')

@section('content')
    <main class="site-main">
        <section class="mb-30px">
            <div class="container">
                <div class="hero-banner">
                    <div class="hero-banner__content">
                        <h3>Tours & Travels</h3>
                        <h1>Amazing Places on earth</h1>
                        <h4>December 12, 2018</h4>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="owl-carousel owl-theme blog-slider">
                    <div class="card blog__slide text-center">
                        <div class="blog__slide__img">
                            <img class="card-img rounded-0" src="{{ asset('assets') }}/img/blog/blog-slider/blog-slide1.png"
                                alt="">
                        </div>
                        <div class="blog__slide__content">
                            <a class="blog__slide__label" href="#">Fashion</a>
                            <h3><a href="#">New york fashion week's continued the evolution</a></h3>
                            <p>2 days ago</p>
                        </div>
                    </div>
                    <div class="card blog__slide text-center">
                        <div class="blog__slide__img">
                            <img class="card-img rounded-0" src="{{ asset('assets') }}/img/blog/blog-slider/blog-slide2.png"
                                alt="">
                        </div>
                        <div class="blog__slide__content">
                            <a class="blog__slide__label" href="#">Fashion</a>
                            <h3><a href="#">New york fashion week's continued the evolution</a></h3>
                            <p>2 days ago</p>
                        </div>
                    </div>
                    <div class="card blog__slide text-center">
                        <div class="blog__slide__img">
                            <img class="card-img rounded-0" src="{{ asset('assets') }}/img/blog/blog-slider/blog-slide3.png"
                                alt="">
                        </div>
                        <div class="blog__slide__content">
                            <a class="blog__slide__label" href="#">Fashion</a>
                            <h3><a href="#">New york fashion week's continued the evolution</a></h3>
                            <p>2 days ago</p>
                        </div>
                    </div>
                    <div class="card blog__slide text-center">
                        <div class="blog__slide__img">
                            <img class="card-img rounded-0" src="{{ asset('assets') }}/img/blog/blog-slider/blog-slide1.png"
                                alt="">
                        </div>
                        <div class="blog__slide__content">
                            <a class="blog__slide__label" href="#">Fashion</a>
                            <h3><a href="#">New york fashion week's continued the evolution</a></h3>
                            <p>2 days ago</p>
                        </div>
                    </div>
                    <div class="card blog__slide text-center">
                        <div class="blog__slide__img">
                            <img class="card-img rounded-0" src="{{ asset('assets') }}/img/blog/blog-slider/blog-slide2.png"
                                alt="">
                        </div>
                        <div class="blog__slide__content">
                            <a class="blog__slide__label" href="#">Fashion</a>
                            <h3><a href="#">New york fashion week's continued the evolution</a></h3>
                            <p>2 days ago</p>
                        </div>
                    </div>
                    <div class="card blog__slide text-center">
                        <div class="blog__slide__img">
                            <img class="card-img rounded-0" src="{{ asset('assets') }}/img/blog/blog-slider/blog-slide3.png"
                                alt="">
                        </div>
                        <div class="blog__slide__content">
                            <a class="blog__slide__label" href="#">Fashion</a>
                            <h3><a href="#">New york fashion week's continued the evolution</a></h3>
                            <p>2 days ago</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--================ Start Blog Post Area =================-->
        <section class="blog-post-area section-margin mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">

                        @if (isset($blogs) && count($blogs) > 0)
                            @foreach ($blogs as $blog)
                                <div class="single-recent-blog-post">
                                    <div class="thumb">
                                        <img class="w-100 img-fluid" src="{{ asset('storage') }}/blogs/{{ $blog->image }}"
                                            alt="">
                                        <ul class="thumb-info">
                                            <li><a href="#"><i class="ti-user"></i>{{ $blog->user->name }}</a></li>
                                            <li><a href="#"><i
                                                        class="ti-notepad"></i>{{ $blog->created_at->format('D M Y') }}</a>
                                            </li>
                                            <li><a href="#"><i class="ti-themify-favicon"></i>2 Comments</a></li>
                                        </ul>
                                    </div>
                                    <div class="details mt-20">
                                        <a href="blog-single.html">
                                            <h3>{{ $blog->title }}</h3>
                                        </a>
                                        <p>{{ $blog->description }}
                                        </p>
                                        <a class="button" href="#">Read More <i class="ti-arrow-right"></i></a>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                        <div class="row">
                            <div class="col-lg-12">
                                @if (isset($blogs) && count($blogs) > 0)
                                    {{ $blogs->render('pagination::bootstrap-4') }}
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- Start Blog Post Siddebar -->
                    @include('theme.partial.sidebar')
                    <!-- End Blog Post Siddebar -->
                </div>
        </section>
    </main>
@endsection
