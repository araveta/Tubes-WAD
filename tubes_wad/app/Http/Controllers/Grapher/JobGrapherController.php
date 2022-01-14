<?php

namespace App\Http\Controllers\Grapher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Layanan;
use App\Models\Member;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class JobGrapherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['judul'] = 'My Jobs';
        $data['class'] = 'job';
        $data['subclass'] = 'job';
        $data['q'] =    DB::table('orders')
                        ->join('layanans', 'orders.id_layanan', '=', 'layanans.id')
                        ->join('users', 'orders.id_user', '=', 'users.id')
                        ->where('id_grapher', \Auth::user()->id)
                        ->get();
        return view('grapher.job.index', $data);
    }

    public function checkout($id)
    {
        //
        $data['judul'] = 'Job Detail';
        $data['class'] = 'job';
        $data['subclass'] = 'job';
        $data['q'] =    DB::table('orders')
                        ->join('layanans', 'orders.id_layanan', '=', 'layanans.id')
                        ->join('users', 'orders.id_user', '=', 'users.id')
                        ->where('code', $id)
                        ->get();
        return view('grapher.job.checkout', $data);
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
    public function store(Request $request, $id)
    {
        //
        $request->validate([
            'code' => 'required',
        ]);
        $q = Order::where('code',$id)->get();
        foreach ($q as $dt){
            $ids = $dt->id;
        }
        
        $aksi = Order::find($ids);
        $aksi->id_grapher = \Auth::user()->id;
        $aksi->status_order = 1; // 1 = sudah di ambil
        $aksi->save();
        return redirect()->route('grapher.job');
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
    }
}
