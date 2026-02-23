@extends('layouts.app')

@section('title', 'Contact')

@section('content')

<div class="breadcrumb-wrapper">
    <div class="container text-center">
        <h2 class="lg-title">Contact</h2>
    </div>
</div>

<section class="pt-5 padding-bottom">
    <div class="container">

        
        <div class="row mb-5">
            <div class="col-lg-12">
                <img src="{{ asset('images/contact.jpg') }}"
                     class="img-fluid w-100">
            </div>
        </div>

       
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        {{-- Contact Form --}}
        <div class="row justify-content-center">
            <div class="col-lg-8">

                <h2 class="mb-4">Get In Touch</h2>

                <form method="POST" action="{{ route('contact.send') }}">
                    @csrf

                    <div class="form-group">
                        <label>Your Name</label>
                        <input
                            class="form-control @error('name') is-invalid @enderror"
                            name="name"
                            type="text"
                            value="{{ old('name') }}"
                            required
                        >
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Your Email</label>
                        <input
                            class="form-control @error('email') is-invalid @enderror"
                            name="email"
                            type="email"
                            value="{{ old('email') }}"
                            required
                        >
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Your Message</label>
                        <textarea
                            class="form-control @error('message') is-invalid @enderror"
                            name="message"
                            rows="7"
                            required
                        >{{ old('message') }}</textarea>
                        @error('message')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button class="btn btn-primary mt-3" type="submit">
                        Send Message
                    </button>

                </form>

            </div>
        </div>

    </div>
</section>

@endsection