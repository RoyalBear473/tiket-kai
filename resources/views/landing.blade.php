@extends('layouts.main')

@section('front-end')
<x-front-navbar></x-front-navbar>

<div class="hero-wrap js-fullheight" style="background-image: url('images/bg.jpg');">
    <div class="overlay"></div>
    <div class="container-fluid">
        <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
            <div class="col-md-7 ftco-animate">
                <h1 class="mb-4">Selamat Datang di Pesan Tiket KAI</h1>
                <p class="caps">Aplikasi berbasis website untuk jasa pemesanan tiket kereta api</p>
                <a href="/orders/create" class="btn btn-primary">Pesan Sekarang!</a>
            </div>
        </div>
    </div>
</div>

@endsection
