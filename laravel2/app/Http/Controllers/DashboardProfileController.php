<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class DashboardProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $profiles = Profile::latest()->paginate(10);
        return view('admin.profileIndex', compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('admin.createProfile');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  mixed  $request
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul'     => 'required',
            'deskripsi'   => 'required'
        ]);

        $profiles = Profile::create([
            'judul'     => $request->judul,
            'deskripsi'   => $request->deskripsi
        ]);

        if($profiles){
            //redirect dengan pesan sukses
            return redirect()->route('profile.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('profile.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  mixed  $profile
     * @return void
     */
    public function edit(Profile $profile)
    {
        return view('admin.editProfile', compact('profile'));
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $profile
     * @return void
     */
    public function update(Request $request, Profile $profile)
    {
        $this->validate($request, [
            'judul'     => 'required',
            'deskripsi'   => 'required'
        ]);

        //get data Blog by ID
        $profile = Profile::findOrFail($profile->id);

        if($profile) {

            $profile->update([
                'judul'     => $request->judul,
                'deskripsi'   => $request->deskripsi
            ]);

        } else {

            $profile->update([
                'judul'     => $request->judul,
                'deskripsi'   => $request->deskripsi
            ]);
            
        }

        if($profile){
            //redirect dengan pesan sukses
            return redirect()->route('profile.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('profile.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profiles = Profile::findOrFail($id);
        $profiles->delete();

        if($profiles){
            //redirect dengan pesan sukses
            return redirect()->route('profile.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('profile.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
