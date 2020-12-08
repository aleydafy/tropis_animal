<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use Redirect, Response;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::latest()->paginate(20);
        return view('dashboard.profile', compact('profiles'));
    }

    public function create()
    {
        return view('create-post');
    }

    public function store(Request $request)
    {   
        $data=$request->validate([
        'judul' => 'required',
        'deskripsi' => 'required',
        ]);  

        $id = $request->id;
        Profile::updateOrCreate(['id' => $id],
                ['judul' => $request->judul,
                'deskripsi' => $request->deskripsi
            ]);

        if(empty($request->id))
            $msg = 'Profile entry created successfully.';
        else
            $msg = 'Profile data is updated successfully';
        return redirect()->route('profile.index')->with('success',$msg);
    }

    public function edit($id)
    {
        $where = array('id' => $id);
        $data  = Profile::where($where)->first();
     
        return Response::json($data);
    }

    public function destroy($id)
    {
        $data = Profile::where('id',$id)->delete();
        return Response::json($data);
    }
}
