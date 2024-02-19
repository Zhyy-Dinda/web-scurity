@extends('website.app')
@section('content')
<section class="services" id="services">
    <h2 class="heading">Layanan <span>Services</span></h2>

    <div class="services-container">
        <div class="services-box">
            <i class="bx bx-code-alt"></i>
            <h3>Web Developmen</h3>
            <p>Lorem ipsum dolor sit amet. repellat placeat repudiandae veniam incidunt distinctio!</p>
            <a href="#portofolio" class="btn">Read More</a>
            </p>
        </div>

        <div class="services-box">
            <i class="bx bxs-paint"></i>
            <h3>Desain grafis</h3>
            <p>Lorem ipsum dolor sit amet. repellat placeat repudiandae veniam incidunt distinctio!</p>

            <a href="#portfolio" class="btn">Read More</a>
            </p>
        </div>

        <div class="services-box">
            <i class="bx bxs-bar-chart-alt-2"></i>
            <h3>Marketing</h3>
            <p>Lorem ipsum dolor sit amet. repellat placeat repudiandae veniam incidunt distinctio!</p>
            <a href="#portfolio" class="btn">Read More</a>
            </p>
        </div>
    </div>
    <!-- <div class="services-iconTop">
        <a href="#portofolio"><i class="bx bx-down-arrow-alt"></i></a>
    </div> -->
</section>
@include('website.components.maps')
@include('website.components.footer')
@endsection