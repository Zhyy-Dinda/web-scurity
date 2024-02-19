@extends('website.app')
@section('content')
    <!-- home secrion -->
  <!-- maps -->
 <style>
    .section{
        margin-top: 100px;
        display: flex;
        justify-content: center;
    }
    h1{
        text-align: center;
    }
    h1{
        background-color: rgb(77, 77, 77);
        padding: 20px;
        border-radius: 10px;
    }
    .frame{
        margin-top: 20px;
        margin: 20px;
        background-color: rgb(47, 255, 245);
    }
 </style>
 
<iframe class="iframe"
src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.1037938264703!2d116.13392327393684!3d-8.681679088401703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdbf5d74ace9f7%3A0x39b2297065396fe8!2sKantor%20Bupati%20Lombok%20Barat!5e0!3m2!1sid!2sid!4v1707965013599!5m2!1sid!2sid"
width="500" height="250" style="border:0;" allowfullscreen="" loading="lazy"
referrerpolicy="no-referrer-when-downgrade"></iframe>
  <div class="section">
    <div class="container">
        <div class="card">
            <h1>location</h1>
        </div>
    </div>
    <div class="container">
        <div class="card">
            <h1>Email</h1>
        </div>
    </div>
    <div class="container">
        <div class="card">
            <h1>Phon</h1>
        </div>
    </div>
  </div>
  
  <!-- contact section -->
  
    <section style="" class="contact" id="contact">
        <div style="margin-bottom: 132px" class="">
            <div class="card">

            </div>
        </div>
        {{-- <img src="./img/pt/poto (2).png" width="300" height="300" alt=""> --}}
        <form action="#">
            <div class="input-box">
                <input type="text" placeholder=": Nama anda">
                <input type="email" name="" id="" placeholder=": Nama@gmail.com">
            </div>
            <div class="input-box">
                <input type="number" placeholder=": +62 XXX XXX XXX">
                <input type="text" name="" id="" placeholder=": Email subjek">
            </div>
            <textarea name="" id="" cols="30" rows="10" placeholder=": Pesan anda"></textarea>
            <input type="submit" name="" id="" value="send Message" class="btn">
        </form>

    </section>
    <!-- contact section end-->
@include('website.components.footer')
@endsection