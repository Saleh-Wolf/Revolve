@extends('layouts.app')

@section('title', 'About')

@section('content')

<div class="breadcrumb-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-center">
                    <h2 class="lg-title">About Me</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="pt-5 padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="row">
                    <div class="col-lg-12">
                        <img src="{{ asset('images/about.jpg') }}" alt="" class="img-fluid w-100">
                    </div>
                </div>

                <div class="row justify-content-center mt-5">
                    <div class="col-lg-12">

                        <div class="row">
                            <div class="col-lg-4">
                                <h5 class="text-uppercase letter-spacing mb-4">Who is me?</h5>
                                <p>
                                    Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
                                    Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.
                                </p>
                            </div>

                            <div class="col-lg-4">
                                <h5 class="text-uppercase letter-spacing mb-4">My vision</h5>
                                <p>
                                    Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,
                                    lorem quis biben. Nam nec tellus a odio tincidunt auctor.
                                </p>
                            </div>

                            <div class="col-lg-4">
                                <h5 class="text-uppercase letter-spacing mb-4">Follow Me :</h5>
                                <div class="follow-socials">
                                    <a href="#"><i class="ti-facebook"></i></a>
                                    <a href="#"><i class="ti-twitter"></i></a>
                                    <a href="#"><i class="ti-instagram"></i></a>
                                    <a href="#"><i class="ti-youtube"></i></a>
                                    <a href="#"><i class="ti-pinterest"></i></a>
                                </div>
                            </div>
                        </div>

                        <h3 class="mb-3 mt-5">
                            I have travel 10+ more countries in this year.
                        </h3>

                        <p class="mb-5">
                            Poor Alice! It was as much as she could do, lying down on one side,
                            to look through into the garden with one eye.
                        </p>

                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="about-widget mb-4">
                                    <img src="{{ asset('images/news/news-1.jpg') }}" class="img-fluid">
                                    <h4 class="mt-3">Hill ward</h4>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="about-widget mb-4">
                                    <img src="{{ asset('images/news/news-2.jpg') }}" class="img-fluid">
                                    <h4 class="mt-3">Awesome ride</h4>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="about-widget mb-4">
                                    <img src="{{ asset('images/news/news-3.jpg') }}" class="img-fluid">
                                    <h4 class="mt-3">Newyork</h4>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="about-widget mb-4">
                                    <img src="{{ asset('images/news/news-4.jpg') }}" class="img-fluid">
                                    <h4 class="mt-3">Rising Sea</h4>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection