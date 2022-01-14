<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Layanan;
use App\Models\Member;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class LayananMemberController extends Controller
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
        $data['class'] = 'layanan';
        $data['subclass'] = 'layanan';
        $data['row'] = Layanan::where('status','Aktif')->get();
        $data['totalorder'] = Order::count();
        $data['orderselesai'] = Order::where('status_order', "=", 2)->count();
        $data['totalmember'] = User::where('is_admin', "=", 0)->count();
        $data['totalgrapher'] = User::where('is_admin', "=", 2)->count();
        return view('memberview.layanan.index', $data);
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
    public function store(Request $request) //=>> simpan layanan yang dipilih ke tabel order
    {
        //
        $request->validate([
            'id_layanan' => 'required',
            'tgl_kerja' => 'required',
            'waktu_kerja' => 'required',
            'lokasi' => 'required',
        ]);
        $code = strtoupper(strtolower(Str::random(5)));
        //definisikan harga awal adalah 0
        $harga = 0;
        //cek harga sesuai id layanan yang dipilih
        foreach(Layanan::where('id',$request->id_layanan)->get() as $dt):
            $harga = $dt['tarif'];
        endforeach;
        Order::create([
			'code' => $code,
			'id_user' => \Auth::user()->id,
            'id_grapher' => 0,
            'id_layanan' => $request->id_layanan,
            'tgl_kerja' => $request->tgl_kerja,
            'waktu_kerja' => $request->waktu_kerja,
            'lokasi' => $request->lokasi,
            'keterangan' => $request->keterangan,
            'harga_order' => $harga,
            'tarif_grapher' => $harga - ($harga*0.1),
            'laba' => ($harga*0.1),
            'status_order' => 0,
		]);
        return redirect()->route('memberview.layanan.checkout',$code);
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function checkout($id) // proses checkout order sesuai layanan yang dipesan
    {
        //
        $data['judul'] = 'Checkout Layanan';
        $data['class'] = 'layanan';
        $data['subclass'] = 'layanan';
        $data['q'] =    DB::table('orders')
                        ->join('layanans', 'orders.id_layanan', '=', 'layanans.id')
                        ->where('code', $id)
                        ->get();
        $data['qo'] = Order::where('code',$id)->get();
        //ambil data pemesan dari id user
        $data['members'] = Member::where('id',\Auth::user()->id)->get();
        return view('memberview.layanan.checkout', $data);
    }

    public function detail($id)
    {
        //
        $data['judul'] = 'Detail Layanan';
        $data['class'] = 'layanan';
        $data['subclass'] = 'layanan';
        $data['ql'] = Layanan::where('id',$id)->get();
        //buat kode randomg order
        $data['random'] = strtoupper(strtolower(Str::random(5)));
        //ambil data pemesan dari id user
        $data['members'] = Member::where('id',\Auth::user()->id)->get();
        return view('memberview.layanan.detail', $data);
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
    public function batalorder($id)
    {
        $aksi = Order::where('code',$id)->get()->first();
        $aksi->delete();
        return redirect()->route('memberview.layanan');
    }

    public function cetakinvoice($id)
    {
        $data['judul'] = 'Checkout Layanan';
        $data['class'] = 'layanan';
        $data['subclass'] = 'layanan';
        $data['q'] =    DB::table('orders')
                        ->join('layanans', 'orders.id_layanan', '=', 'layanans.id')
                        ->where('code', $id)
                        ->get();
        $data['qo'] = Order::where('code',$id)->get();
        //ambil data pemesan dari id user
        $data['members'] = Member::where('id',\Auth::user()->id)->get();
        return view('memberview.layanan.cetakinvoice', $data);
    }
}
