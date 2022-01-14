<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photographer;
use App\Models\Layanan;
use App\Models\Order;
use App\Models\Gallery;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mgallery()
    {
        //
        $data['judul'] = 'Gallery';
        $data['class'] = 'gallery';
        $data['subclass'] = 'gallery';
        $data['q'] =    DB::table('orders')
                        ->join('layanans', 'orders.id_layanan', '=', 'layanans.id')
                        ->join('users', 'orders.id_grapher', '=', 'users.id')
                        ->where('id_user', \Auth::user()->id)
                        ->get();
        return view('memberview.gallery.index', $data);
    }

    public function mshow($id)
    {
        //
        // ambil id oder dari kode order (code)
        $dg = Order::where('code',$id)->get();
        foreach($dg as $dt){
            $idg = $dt->id;
        }
        $data['judul'] = 'Gallery Foto Album';
        $data['class'] = 'gallery';
        $data['subclass'] = 'gallery';
        $data['q'] =    DB::table('galleries')
                        ->where('id_order', $idg)
                        ->get();
        return view('memberview.gallery.view', $data);
    }


    public function pgallery()
    {
        //
        $data['judul'] = 'Gallery';
        $data['class'] = 'gallery';
        $data['subclass'] = 'gallery';
        $data['q'] =    DB::table('orders')
                        ->join('layanans', 'orders.id_layanan', '=', 'layanans.id')
                        ->join('users', 'orders.id_grapher', '=', 'users.id')
                        ->where('id_grapher', \Auth::user()->id)
                        ->get();
        return view('grapher.gallery.index', $data);
    }

    public function pgshow($id)
    {
        //
        $dg = Order::where('code',$id)->get();
        foreach($dg as $dt){
            $idg = $dt->id;
        }
        $data['judul'] = 'Gallery Foto Album';
        $data['class'] = 'gallery';
        $data['subclass'] = 'gallery';
        $data['ido'] = $idg;
        $data['code_order'] = $id;
        $data['q'] =    DB::table('galleries')
                        ->where('id_order', $idg)
                        ->get();
        return view('grapher.gallery.view', $data);
    }

    public function pgstore(Request $request)
    {
        //
        $request->validate([
            'id_order' => 'required',
            'nama_foto' => 'required',
            'foto' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $nama_file = time().'.'.$request->file('foto')->getClientOriginalName();
        $request->file('foto')->move(public_path('image'), $nama_file);

        Gallery::create([
			'id_order' => $request->id_order,
            'nama_foto' => $request->nama_foto,
            'foto' => $nama_file,
		]);
        return redirect()->route('grapher.gallery.view',$request->code_order)->with('succes','Data Berhasil di Input');
    }

    public function adgallery()
    {
        //
        $data['judul'] = 'Gallery';
        $data['class'] = 'gallery';
        $data['subclass'] = 'gallery';
        $data['q'] =    DB::table('orders')
                        ->join('layanans', 'orders.id_layanan', '=', 'layanans.id')
                        ->join('users', 'orders.id_grapher', '=', 'users.id')
                        ->get();
        $data['totalorder'] = Order::count();
        $data['orderselesai'] = Order::where('status_order', "=", 2)->count();
        $data['totalmember'] = User::where('is_admin', "=", 0)->count();
        $data['totalgrapher'] = User::where('is_admin', "=", 2)->count();
        return view('admin.gallery.index', $data);
    }

    public function adshow($id)
    {
        //
        $dg = Order::where('code',$id)->get();
        foreach($dg as $dt){
            $idg = $dt->id;
        }
        $data['judul'] = 'Gallery Foto Album';
        $data['class'] = 'gallery';
        $data['subclass'] = 'gallery';
        $data['ido'] = $idg;
        $data['code_order'] = $id;
        $data['q'] =    DB::table('galleries')
                        ->where('id_order', $idg)
                        ->get();
        return view('admin.gallery.view', $data);
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
        //
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
        //
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
        //
        $d = DB::table('galleries')
            ->join('orders', 'galleries.id_order', '=', 'orders.id')
            ->where('galleries.id', $id)
            ->get();
        foreach($d as $k => $item){
            $code_order = $item->code;
        }
        $aksi = Gallery::find($id);
        $aksi->delete();
        return redirect()->route('grapher.gallery.view',$code_order)->with('succes','Data Berhasil di Hapus');
    }
}
