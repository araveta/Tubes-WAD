<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Layanan;
use App\Models\Member;
use App\Models\User;
use App\Models\Order;



class LayananAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['judul'] = 'Daftar Layanan';
        $data['class'] = 'master_data';
        $data['subclass'] = 'layanan';
        $data['q'] = Layanan::all();
        $data['totalorder'] = Order::count();
        $data['orderselesai'] = Order::where('status_order', "=", 2)->count();
        $data['totalmember'] = User::where('is_admin', "=", 0)->count();
        $data['totalgrapher'] = User::where('is_admin', "=", 2)->count();
        //$data['rows'] = Photographer::where('nama_user', 'like', '%' . $request->q . '%')->get();
        return view('admin.layanan.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data['judul'] = 'Tambah Layanan';
        $data['class'] = 'master_data';
        $data['subclass'] = 'layanan';
        return view('admin.layanan.create',$data);
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
        $request->validate([
            'nama_layanan' => 'required',
            'tarif' => 'required',
            'deskripsi' => 'required',
            'status' => 'required',
            'cover' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $nama_file = time().'.'.$request->file('cover')->getClientOriginalName();
        $request->file('cover')->move(public_path('image'), $nama_file);

        Layanan::create([
			'nama_layanan' => $request->nama_layanan,
			'tarif' => $request->tarif,
            'deskripsi' => $request->deskripsi,
            'status' => $request->status,
            'cover' => $nama_file,
		]);
        return redirect()->route('admin.layanan')->with('succes','Data Berhasil di Input');
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
        $data['judul'] = 'Edit Layanan';
        $data['class'] = 'master_data';
        $data['subclass'] = 'layanan';
        $data['row'] = Layanan::find($id);
        return view('admin.layanan.edit', $data);
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
        $request->validate([
            'nama_layanan' => 'required',
            'tarif' => 'required',
            'deskripsi' => 'required',
            'status' => 'required',
            'cover' => 'file|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        

        $aksi = Layanan::find($id);
        $aksi->nama_layanan = request('nama_layanan');
        $aksi->deskripsi = request('deskripsi');
        $aksi->tarif = request('tarif');
        $aksi->status = request('status');
        if(!empty($request->file('cover'))){
            $nama_file = time().'.'.$request->file('cover')->getClientOriginalName();
            $request->file('cover')->move(public_path('image'), $nama_file);
            $aksi->cover = $nama_file;
        }
        $aksi->save();

        return redirect()->route('admin.layanan')->with('succes','Data Berhasil di Input');
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
        $aksi = Layanan::find($id);
        $aksi->delete();
        return redirect()->route('admin.layanan')->with('succes','Data Berhasil di Hapus');
    }
}
