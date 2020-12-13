<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardBeritaController extends Controller
{    
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $berita = Berita::latest()->paginate(10);
        return view('adminBerita.index', compact('berita'));
    }
    
    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('adminBerita.create');
    }
    
    /**
     * store
     *
     * @param  mixed $request
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'image'     => 'required|image|mimes:png,jpg,jpeg',
            'judul'     => 'required',
            'konten'   => 'required'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/blogs', $image->hashName());

        $berita = Berita::create([
            'image'     => $image->hashName(),
            'judul'     => $request->judul,
            'konten'   => $request->konten
        ]);

        if($berita){
            //redirect dengan pesan sukses
            return redirect()->route('berita.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('berita.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }
    
    /**
     * edit
     *
     * @param  mixed $berita
     * @return void
     */
    public function edit(Berita $berita)
    {
        return view('adminBerita.edit', compact('berita'));
    }
    
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $berita
     * @return void
     */
    public function update(Request $request, Berita $berita)
    {
        $this->validate($request, [
            'judul'     => 'required',
            'konten'   => 'required'
        ]);

        //get data Blog by ID
        $berita = Berita::findOrFail($berita->id);

        if($request->file('image') == "") {

            $berita->update([
                'judul'     => $request->judul,
                'konten'   => $request->konten
            ]);

        } else {

            //hapus old image
            Storage::disk('local')->delete('public/blogs/'.$berita->image);

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/blogs', $image->hashName());

            $berita->update([
                'image'     => $image->hashName(),
                'judul'     => $request->judul,
                'konten'   => $request->konten
            ]);
            
        }

        if($berita){
            //redirect dengan pesan sukses
            return redirect()->route('berita.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('berita.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }
    
    /**
     * destroy
     *
     * @param  mixed $id
     * @return void
     */
    public function destroy($id)
    {
            $berita = Berita::findOrFail($id);
            $berita->delete();

            if($berita){
                //redirect dengan pesan sukses
                return redirect()->route('berita.index')->with(['success' => 'Data Berhasil Dihapus!']);
            }else{
                //redirect dengan pesan error
                return redirect()->route('berita.index')->with(['error' => 'Data Gagal Dihapus!']);
            }
    }

}
