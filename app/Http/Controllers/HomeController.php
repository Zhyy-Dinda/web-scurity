<?php

namespace App\Http\Controllers;

use App\Models\Beranda;
use App\Models\profile;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function beranda(){
        $data = Beranda::all();
        $profile = profile::latest()->paginate(1);
        return view("website.content.beranda" ,compact("data","profile"));
    }

    public function profile(){
        return view("website.content.profile");
    }

    public function artikel(){
        return view("website.content.artikel");
    }

    public function rfc(){
        return view("website.content.rfc");
    }

    public function layanan(){
        return view("website.content.layanan");
    }

    public function panduan(){
        return view("website.content.panduan");
    }
    
    public function kontak(){
        return view("website.content.kontak");
    }

}
