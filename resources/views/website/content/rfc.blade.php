@extends('website.app')
@section('content')
    <section class="rfc item-center content-center" id="services">
        <h2 class="heading">RFC<span>2350</span></h2>
        <div class=" content-center pdf">
            <iframe class="pdf card-pdf" src="{{ asset('RFC 2350 MataramKota-CSIRT.pdf') }}" align="top" height="600" width="60%" frameborder="0" scrolling="auto"></iframe>
        </div>

        <!-- <div class="services-iconTop">
            <a href="#portofolio"><i class="bx bx-down-arrow-alt"></i></a>
        </div> -->
    </section>
    @include('website.components.maps')
    @include('website.components.footer')
@endsection
