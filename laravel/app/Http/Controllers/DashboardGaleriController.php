<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DataTables;
use Carbon\Carbon;
use App\Models\Galeri;
use File;
use Illuminate\Support\Facades\Cache;
use Redirect, Response;

class DashboardGaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = Galeri::whereNotIn('id', [7])->get();
      $GaleriBaru = Galeri::orderBy('created_at', 'desc')->limit(1)->first();

      return view('dashboard.Galeri', compact('data', 'GaleriBaru'))->with('i', (request()->input('page', 1) - 1));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request->id;
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            \File::delete('public/images/'.$request->hidden_image);
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $destinationaPath = public_path('/images');
            $file->move($destinationaPath, $fileName);
        }

        $data = Berita::updateOrCreate(['id' => $id],
                ['gambar' => $fileName,
                'judul' => $request->judul,
                'konten' => $request->konten
            ]);

        return Response::json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $where = array('id' => $id);
        $data  = Berita::where($where)->first();
     
        return Response::json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Berita::where('id',$id)->delete();
        \File::delete('public/images/'.$request->hidden_image);
        return Response::json($data);
    }
}
