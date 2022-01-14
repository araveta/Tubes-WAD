<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Photographer;
use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Facades\Hash;

class PhotographerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['judul'] = 'Data Grapher';
        $data['class'] = 'master_data';
        $data['subclass'] = 'photographer';
        $data['q'] = Photographer::where('is_admin',2)->get();
        $data['totalorder'] = Order::count();
        $data['orderselesai'] = Order::where('status_order', "=", 2)->count();
        $data['totalmember'] = User::where('is_admin', "=", 0)->count();
        $data['totalgrapher'] = User::where('is_admin', "=", 2)->count();
        //$data['rows'] = Photographer::where('nama_user', 'like', '%' . $request->q . '%')->get();
        return view('admin.photographer.index', $data);
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
        //$data['judul'] = 'Edit Photographer';
        //return view('admin.photographer.edit', compact('photographer'));
        $data['judul'] = 'Edit Grapher';
        $data['class'] = 'master_data';
        $data['subclass'] = 'photographer';
        $data['row'] = Photographer::find($id);
        return view('admin.photographer.edit', $data);
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
            'name' => '',
            'tmp_lahir' => '',
            'tgl_lahir' => '',
            'tlp' => '',
            'deskripsi' => '',
            'status' => '',
            'alamat' => '',
            'foto' => 'file|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        

        $aksi = Photographer::find($id);
        $aksi->name = request('name');
        $aksi->tmp_lahir = request('tmp_lahir');
        $aksi->tgl_lahir = request('tgl_lahir');
        $aksi->tlp = request('tlp');
        $aksi->status = request('status');
        $aksi->deskripsi = request('deskripsi');
        $aksi->alamat = request('alamat');
        if(!empty($request->file('foto'))){
            $nama_file = time().'.'.$request->file('foto')->getClientOriginalName();
            $request->file('foto')->move(public_path('image'), $nama_file);
            $aksi->foto = $nama_file;
        }
        $pass = $request->input('password');
        if(!empty($pass)){
            $aksi->password = Hash::make($pass);
        }
        $aksi->save();

        return redirect()->route('admin.photographer')->with('succes','Data Berhasil di Input');
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
        $aksi = Photographer::find($id);
        $aksi->delete();
        return redirect()->route('admin.photographer')->with('succes','Data Berhasil di Hapus');
    }
}
