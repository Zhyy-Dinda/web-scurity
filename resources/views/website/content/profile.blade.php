@extends('website.app')
@section('content')

<style>
    .container{
        text-align: center;
        align-items: center;
        justify-content: center;
        margin-top: 100px;
        text-align: center;
        align-items: center;
        display: flex;
        margin-bottom: 20px;
        font-size: 36px;
    }
</style>

<div class="container about-content">
    <h1 class="h">Profile <span>Me</span></h1>
    <h3 class="h3">Ciber!</h3>
</div>
<section class="about" id="about">
    
    <div class="about-img">
        <img src="{{ asset('img/bg/home-bg.jpg') }}" width="600" height="600" alt="">
    </div>

    <div class="about-content">
        <h2 class="heading">About <span>Me</span></h2>
        <h3 class="h3">Frontend Gobloker!</h3>
        <p>Teknologi bukanlah apa-apa. Hal yang penting adalah kamu memiliki keyakinan terhadap orang lain, dimana
            mereka pada dasarnya baik dan pintar, dan jika kamu memberikan mereka peralatan, mereka akan melakukan
            hal yang menakjubkan dengan alat-alat itu.</p>

        <a href="#services" class="btn">Read More</a>
    </div>
    <div class="about-content">
        <h2 class="heading">About <span>Me</span></h2>
        <h3 class="h3">Frontend Gobloker!</h3>
        <p>Teknologi bukanlah apa-apa. Hal yang penting adalah kamu memiliki keyakinan terhadap orang lain, dimana
            mereka pada dasarnya baik dan pintar, dan jika kamu memberikan mereka peralatan, mereka akan melakukan
            hal yang menakjubkan dengan alat-alat itu.</p>

        <a href="#services" class="btn">Read More</a>
    </div>
    <div class="about-content">
        <h2 class="heading">About <span>Me</span></h2>
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
<section class="about" id="about">
   

    <div class="about-content">
        <h2 class="heading">About <span>Me</span></h2>
        <h3 class="h3">Frontend Gobloker!</h3>
        <p>Teknologi bukanlah apa-apa. Hal yang penting adalah kamu memiliki keyakinan terhadap orang lain, dimana
            mereka pada dasarnya baik dan pintar, dan jika kamu memberikan mereka peralatan, mereka akan melakukan
            hal yang menakjubkan dengan alat-alat itu.</p>

        <a href="#services" class="btn">Read More</a>
    </div>
    <div class="about-content">
        <h2 class="heading">About <span>Me</span></h2>
        <h3 class="h3">Frontend Gobloker!</h3>
        <p>Teknologi bukanlah apa-apa. Hal yang penting adalah kamu memiliki keyakinan terhadap orang lain, dimana
            mereka pada dasarnya baik dan pintar, dan jika kamu memberikan mereka peralatan, mereka akan melakukan
            hal yang menakjubkan dengan alat-alat itu.</p>

        <a href="#services" class="btn">Read More</a>
    </div>

    <div class="about-img img-left">
        <img src="{{ asset('img/bg/home-bg.jpg') }}" width="600" height="600" alt="">
    </div>
    <!-- <div class="services-iconTop">
        <a href="#services"><i class="bx bx-down-arrow-alt"></i></a>
    </div> -->
</section>
@include('website.components.maps')
@include('website.components.footer')
@endsection