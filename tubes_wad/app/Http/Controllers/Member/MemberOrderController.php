<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Layanan;
use App\Models\Member;
use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class MemberOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['judul'] = 'My Orders';
        $data['class'] = 'order';
        $data['subclass'] = 'order';
        $data['q'] =    DB::table('orders')
                        ->join('layanans', 'orders.id_layanan', '=', 'layanans.id')
                        ->join('users', 'orders.id_grapher', '=', 'users.id')
                        ->where('id_user', \Auth::user()->id)
                        ->get();
        $data['totalorder'] = Order::count();
        $data['orderselesai'] = Order::where('status_order', "=", 2)->count();
        $data['totalmember'] = User::where('is_admin', "=", 0)->count();
        $data['totalgrapher'] = User::where('is_admin', "=", 2)->count();
        return view('memberview.memberorder.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data['judul'] = 'Tambah Order';
        $data['class'] = 'master_data';
        $data['subclass'] = 'order';
        $data['totalorder'] = Order::count();
        $data['orderselesai'] = Order::where('status_order', "=", 2)->count();
        $data['totalmember'] = User::where('is_admin', "=", 0)->count();
        $data['totalgrapher'] = User::where('is_admin', "=", 2)->count();
        return view('admin.order.create',$data);
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
            'id_user' => 'required',
            'id_pg' => 'required',
            'id_layanan' => 'required',
            'tgl' => 'required',
            'tempat' => 'required',
            'jam' => 'required',
            'status' => 'required',

        ]);
        // $nama_file = time().'.'.$request->file('foto')->getClientOriginalName();
        // $request->file('foto')->move(public_path('image'), $nama_file);

        Order::create([
			'id_user' => $request->id_user,
            'id_pg' => $request->id_pg,
            'id_layanan' => $request->id_layanan,
            'tgl' => $request->tgl,
            'tempat' => $request->tempat,
            'jam' => $request->jam,
            'status' => $request->status,
		]);
        return redirect()->route('admin.order')->with('succes','Data Berhasil di Input');
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
        $data['judul'] = 'Edit Order';
        $data['class'] = 'master_data';
        $data['subclass'] = 'order';
        $data['row'] = Order::find($id);;
        return view('admin.order.edit', $data);
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
            'id_user' => 'required',
            'id_pg' => 'required',
            'id_layanan' => 'required',
            'tgl' => 'required',
            'tempat' => 'required',
            'jam' => 'required',
            'status' => 'required',
        ]);
        

        $aksi = Order::find($id);
        $aksi->id_user = request('id_user');
        $aksi->id_pg = request('id_pg');
        $aksi->id_layanan = request('id_layanan');
        $aksi->tgl = request('tgl');
        $aksi->tempat = request('tempat');
        $aksi->jam = request('jam');
        $aksi->status = request('status');
        // if(!empty($request->file('foto'))){
        //     $nama_file = time().'.'.$request->file('foto')->getClientOriginalName();
        //     $request->file('foto')->move(public_path('image'), $nama_file);
        //     $aksi->foto = $nama_file;
        // }
        $aksi->save();

        return redirect()->route('admin.order')->with('succes','Data Berhasil di Input');
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
        $aksi = Order::find($id);
        $aksi->delete();
        return redirect()->route('admin.order')->with('succes','Data Berhasil di Hapus');
    }
    



   
}

