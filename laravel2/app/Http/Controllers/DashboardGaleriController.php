<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardGaleriController extends Controller
{    
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $galeri = Galeri::latest()->paginate(10);
        return view('adminGaleri.index', compact('galeri'));
    }
    
    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('adminGaleri.create');
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
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/blogs', $image->hashName());

        $galeri = Galeri::create([
            'image'     => $image->hashName(),
        ]);

        if($galeri){
            //redirect dengan pesan sukses
            return redirect()->route('galeri.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('galeri.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }
    
    /**
     * edit
     *
     * @param  mixed $news
     * @return void
     */
    public function edit(Galeri $galeri)
    {
        return view('adminGaleri.edit', compact('galeri'));
    }
    
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $news
     * @return void
     */
    public function update(Request $request, Galeri $galeri)
    {
        $galeri = Galeri::findOrFail($galeri->id);

        if($request->file('image') == "") {

        } else {

            //hapus old image
            Storage::disk('local')->delete('public/blogs/'.$galeri->image);

            //upload new image
            $galeri = $request->file('image');
            $galeri->storeAs('public/blogs', $image->hashName());

            $galeri->update([
                'image'     => $image->hashName(),
            ]);
            
        }

        if($galeri){
            //redirect dengan pesan sukses
            return redirect()->route('galeri.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('galeri.index')->with(['error' => 'Data Gagal Diupdate!']);
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
            $galeri = Galeri::findOrFail($id);
            $galeri->delete();

            if($galeri){
                //redirect dengan pesan sukses
                return redirect()->route('galeri.index')->with(['success' => 'Data Berhasil Dihapus!']);
            }else{
                //redirect dengan pesan error
                return redirect()->route('galeri.index')->with(['error' => 'Data Gagal Dihapus!']);
            }
    }

}
