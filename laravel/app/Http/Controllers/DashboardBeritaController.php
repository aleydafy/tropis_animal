<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use Carbon\Carbon;
use App\Models\Berita;
use File;
use Illuminate\Support\Facades\Cache;
use Redirect, Response;

class DashboardBeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Berita::all();
        if ($request->ajax()) {
            return Datatable::of($data)
            ->addColumn('action', function($row){ 
              $btn = '<a href="javascript:void(0)" data-toggle="tooltip" data-id="'.$row->id.'" class="btn btn-outline-success edit"><i class="fa fa-pencil" data-toggle="tooltip" title="Edit"></i></a>'; 
              $btn = $btn.'  <a href="javascript:void(0)" data-toggle="tooltip" id="'.$row->id.'" class="btn btn-outline-danger delete"><i class="fa fa-trash" data-toggle="tooltip" title="Delete"></i></a>'; 
              return $btn; 
         })
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }

        return view('dashboard.berita');
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
