@extends('website.app')
@section('content')
<section class="about" id="about">
    <div class="about-img">
        <img src="{{ asset('img/bg/logo/frame_3.png') }}" width="600" height="600" alt="">
    </div>

    <div class="about-content">
        <h2 class="heading">Panduan <span>Me</span></h2>
        <h3 class="h3">Frontend Gobloker!</h3>
        <p>Teknologi bukanlah apa-apa. Hal yang penting adalah kamu memiliki keyakinan terhadap orang lain, dimana
            mereka pada dasarnya baik dan pintar, dan jika kamu memberikan mereka peralatan, mereka akan melakukan
            hal yang menakjubkan dengan alat-alat itu.</p>

        <a href="#services" class="btn">Read More</a>
    </div>
    <!-- <div class="services-iconTop">
        <a href="#services"><i class="bx bx-down-arrow-alt"></i></a>
    </div> -->
</section>
@include('website.components.maps')
@include('website.components.footer')
@endsection