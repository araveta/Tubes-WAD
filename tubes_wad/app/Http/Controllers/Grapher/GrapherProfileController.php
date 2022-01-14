<?php

namespace App\Http\Controllers\Grapher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Layanan;
use App\Models\Member;
use App\Models\User;
use App\Models\Order;
use App\Models\Profile;
use App\Models\GrapherProfile;


class GrapherProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['judul'] = 'Daftar Profile';
        $data['class'] = 'master_data';
        $data['subclass'] = 'grapherprofile';
        $data['row'] = User::find(\Auth::user()->id);
        //$data['rows'] = Photographer::where('nama_user', 'like', '%' . $request->q . '%')->get();
        return view('grapher.profile', $data);
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
        $request->validate([
            'name' => 'required',
            'tmpt_lahir' => 'required',
            'tgl_lahir' => 'required',
            'tlp' => 'required',
            'alamat' => 'required',
            'foto' => 'file|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        

        $aksi = User::find(\Auth::user()->id);
        $aksi->name = request('name');
        $aksi->tmpt_lahir = request('tmpt_lahir');
        $aksi->tgl_lahir = request('tgl_lahir');
        $aksi->tlp = request('tlp');
        $aksi->alamat = request('alamat');
        if(!empty($request->file('foto'))){
            $nama_file = time().'.'.$request->file('foto')->getClientOriginalName();
            $request->file('foto')->move(public_path('image'), $nama_file);
            $aksi->foto = $nama_file;
        }
        $aksi->save();

        return redirect()->route('grapher.home')->with('succes','Data Berhasil di Input');
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
    }
}
