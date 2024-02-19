@extends('website.app')
@section('content')
    <!-- home secrion -->
    <section class="home" id="home">
        @forelse ($data as $dt)
        <div class="home-content">
            <h1 class="text-animate">{{ $dt->title }} {{ $dt->heading }}</h1> 
            <h1 class="text-animate"></h1>
            <h3>{{ $dt->sub_title }}</h3>
            <h3>Latest <span class="multiple-text"></span></h3>
            <p class="texts">{{ $dt->content }}</p>

            <div class="social-media">
                <a href="#"><i class='bx bxl-whatsapp'></i></a>
                <a href="#"><i class='bx bxl-instagram'></i></a>
                <a href="#"><i class='bx bxl-tiktok'></i></a>
                <a href="#"><i class='bx bxl-youtube'></i></a>
            </div>

            <a href="#about" class="btn">Read More</a>
            <a target="_blank" href="/admin/dashboard" class="btn-outline">Lapor</a>
        </div>
        
            
        @empty
        <div class="home-content">
            <h1 class="text-animate">404 Data Belum Ada</h1> 
            <h1 class="text-animate"></h1>
            <h3>Hanya Admin yang bisa </h3>
            <h3>Latest <span class="multiple-text"></span></h3>
            <p class="texts">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae non tempora earum officiis reprehenderit dolor laudantium libero laboriosam culpa harum optio iure qui, iusto cumque rem accusantium modi quis quibusdam.</p>

            <div class="social-media">
                <a href="#"><i class='bx bxl-whatsapp'></i></a>
                <a href="#"><i class='bx bxl-instagram'></i></a>
                <a href="#"><i class='bx bxl-tiktok'></i></a>
                <a href="#"><i class='bx bxl-youtube'></i></a>
            </div>

            <a href="#about" class="btn">Read More</a>
            <a target="_blank" href="/admin/dashboard" class="btn-outline">Lapor</a>
        </div>
        @endforelse

        <div class="home-img">
            <img src="./img/bg/img.png" width="300" height="200" alt="">
        </div>
        <!-- <div class="services-iconTop">
            <a href="#about"><i class="bx bx-down-arrow-alt"></i></a>
        </div> -->
    </section>
    <!-- home secrion end -->

    @forelse ($profile as $item)
    <!-- about profile -->
    <section class="about" id="about">
        <div class="about-img">
            <img src="{{ Storage::url('public/profile/' . $item->image) }}" width="600" height="600" alt="">
        </div>

        <div class="about-content">
            <h3 class="h3">{{ $item->heading }}</h3>
            <h2 class="heading">{{ $item->title }} <span>CSIRT</span></h2>
            <p>{{ $item->content}}</p>

            <a href="#portofolio" class="btn">Read More</a>
        </div>
        <!-- <div class="services-iconTop">
            <a href="#services"><i class="bx bx-down-arrow-alt"></i></a>
        </div> -->
    </section>
    <section class="about" id="about">
        
        <div class="about-content">
            <h3 class="h3">{{ $item->heading }}</h3>
            <h2 class="heading">{{ $item->title }} <span>CSIRT</span></h2>
            <p>{{ $item->content}}</p>
            
            <a href="#portofolio" class="btn">Read More</a>
        </div>
        <!-- <div class="services-iconTop">
            <a href="#services"><i class="bx bx-down-arrow-alt"></i></a>
        </div> -->
        <div class="about-img">
            <img src="{{ Storage::url('public/profile/' . $item->image) }}" width="600" height="600" alt="">
        </div>
    </section>
    <!-- about section end-->    
    @empty
        
    <!-- about profile -->
    <section class="about" id="about">
        <div class="about-img">
            <img src="{{ asset('img/bg/frame_1.png') }}" width="600" height="600" alt="">
        </div>

        <div class="about-content">
            <h3 class="h3">{Profile}</h3>
            <h2 class="heading">About <span>CSIRT</span></h2>
            <p>Teknologi bukanlah apa-apa. Hal yang penting adalah kamu memiliki keyakinan terhadap orang lain, dimana
                mereka pada dasarnya baik dan pintar, dan jika kamu memberikan mereka peralatan, mereka akan melakukan
                hal yang menakjubkan dengan alat-alat itu.</p>

            <a href="#portofolio" class="btn">Read More</a>
        </div>
        <!-- <div class="services-iconTop">
            <a href="#services"><i class="bx bx-down-arrow-alt"></i></a>
        </div> -->
    </section>
    <!-- about section end-->
    @endforelse


    <!-- post section -->
    <section class="services" id="portofolio">
        <h2 class="heading">Last's <span>Post</span></h2>

        <div class="portofolio-container">
            <div class="portofolio-box">
                <img src="./img/bg1.jpeg" width="400" height="200" alt="">
                <div class="portofolio-layer">
                    <h4>Web Desainer</h4>
                    <p>Corporis ducimus laborum sapiente atque alias at quod sit? Laudantium.</p>
                    <a href="#contact"><i class="bx bx-link-alt"></i></a>
                </div>
            </div>
            <div class="portofolio-box">
                <img src="./img/bg2.jpeg" width="500" height="300" alt="">
                <div class="portofolio-layer">
                    <h4>Web Desainer</h4>
                    <p>Corporis ducimus laborum sapiente atque alias at quod sit? Laudantium.</p>
                    <a href="#"><i class="bx bx-link-alt"></i></a>
                </div>
            </div>
            <div class="portofolio-box">
                <img src="./img/bg3.jpg" width="500" height="300" alt="">
                <div class="portofolio-layer">
                    <h4>Web Desainer</h4>
                    <p>Corporis ducimus laborum sapiente atque alias at quod sit? Laudantium.</p>
                    <a href="#"><i class="bx bx-link-alt"></i></a>
                </div>
            </div>
            <div class="portofolio-box">
                <img src="./img/bg4.jpg" width="500" height="300" alt="">
                <div class="portofolio-layer">
                    <h4>Web Desainer</h4>
                    <p>Corporis ducimus laborum sapiente atque alias at quod sit? Laudantium.</p>
                    <a href="#"><i class="bx bx-link-alt"></i></a>
                </div>
            </div>
            <div class="portofolio-box">
                <img src="./img/bg5.jpg" width="500" height="300" alt="">
                <div class="portofolio-layer">
                    <h4>Web Desainer</h4>
                    <p>Corporis ducimus laborum sapiente atque alias at quod sit? Laudantium.</p>
                    <a href="#"><i class="bx bx-link-alt"></i></a>
                </div>
            </div>
            <div class="portofolio-box">
                <img src="./img/bg4.jpg" width="500" height="300" alt="">
                <div class="portofolio-layer">
                    <h4>Web Desainer</h4>
                    <p>Corporis ducimus laborum sapiente atque alias at quod sit? Laudantium.</p>
                    <a href="#"><i class="bx bx-link-alt"></i></a>
                </div>
            </div>
        </div>
        <a href="#portofolio" class="mt-3 btn-outline ">Read More</a>
    </section>
    <!-- portofolio section end-->

    <!-- services artkel -->
    <section class="portofolio" id="services">
        <h2 class="heading">Web <span>Services</span></h2>

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
    <!-- services section end -->


    


    <!-- contact section -->
    <section class="contact" id="contact">
        <img src="{{ asset('img/bg/rm-bg.png') }}" width="200" height="100" alt="">
        <form action="#">
            <div class="input-box">
                <input type="text" placeholder="Nama anda :">
                <input type="email" name="" id="" placeholder="Nama@gmail.com :">
            </div>
            <div class="input-box">
                <input type="number" placeholder="+62 XXX XXX XXX :">
                <input type="text" name="" id="" placeholder="Email subjek :">
            </div>
            <textarea name="" id="" cols="30" rows="10" placeholder="Pesan anda :"></textarea>
            <input type="submit" name="" id="" value="send Message" class="btn">
        </form>

    </section>
    <!-- contact section end-->
    @include('website.components.maps')
    @include('website.components.footer')
@endsection