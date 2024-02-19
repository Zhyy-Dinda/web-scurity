<?php

namespace App\Http\Controllers;

use App\Models\profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
   
    public function index()
    {
        $data =  profile::latest()->paginate(5);
        return view('admin.content.profile.index', compact("data"));
    }


    public function create()
    {
        return view('admin.content.profile.create');
    }

   
    public function store(Request $request)
    {
        $this->validate($request, [
            'image'   =>  'required|image|mimes:png,jpg,jpeg,gif,svg|max:2048',
            'heading' =>  'required|min:5',
            'title'   =>  'required|min:5',
            'content' =>  'required|min:10',
        ]);

        $image = $request->file('image');
        $image->storeAs('public/profile/', $image->hashName());


        profile::create([
            'image'  => $image->hashName(),
            'heading'  => $request->heading,
            'title'  => $request->title,
            'content'=> $request->content
        ]);

        return redirect()->route('profile.index')->with(['success' => 'Data Berhasil Di Update']);
    }

    public function show(profile $profile)
    {
        //
    }

   
    public function edit(profile $profile)
    {
        return view('admin.content.profile.edit',compact('profile'));
    }


    public function update(Request $request, profile $profile)
    {
        $this->validate($request, [
            'image'     => 'image|mimes:png,jpg,jpeg,gif,svg|max:2048',
            'heading'   => 'required|min:5',
            'title'     => 'required|min:5',
            'content'     => 'required|min:10',
        ]);

        if($request->hasFile('image')){


            $image = $request->file('image');
            $image->storeAs('public/profile/',$image->hashName());

            Storage::delete('public/profile/'.$profile->image);

            $profile->update([
                'image'     =>  $image->hashName(),
                'heading'   =>  $request->heading,
                'title'     =>  $request->title,
                'content'   =>  $request->content,
            ]);
        }else{

            $profile->update([
                'heading'   => $request->heading,
                'title'     => $request->title,
                'content'   => $request->content,
            ]);
        }
        return redirect()->route('profile.index')->with(['success' => 'Data Berhasil Di Update']);
    }


    public function destroy(profile $profile)
    {
        Storage::delete('public/profile/'. $profile->image);

        $profile->delete();

        return redirect()->route('profile.index')->with(['success', 'Data Telah Di hapus']);
    }
}
