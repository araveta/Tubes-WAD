<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photographer;
use App\Models\Layanan;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $d['judul'] = 'Dashboard';
        $d['class'] = 'home';
        $d['subclass'] = 'home';
        $data['q'] =    DB::table('orders')
                        ->join('layanans', 'orders.id_layanan', '=', 'layanans.id')
                        ->join('users', 'orders.id_user', '=', 'users.id')
                        ->where('code', $id)
                        ->get();
        $data['totalorder'] = Order::count();
        $data['orderselesai'] = Order::where('status_order', "=", 2)->count();
        $data['totalmember'] = User::where('is_admin', "=", 0)->count();
        $data['totalgrapher'] = User::where('is_admin', "=", 2)->count();
        return view('home',$d);
    }

    // public function finish($id)
    // {
    //     //
    //     $data['judul'] = 'Job Detail';
    //     $data['class'] = 'job';
    //     $data['subclass'] = 'job';
    //     $data['q'] =    DB::table('orders')
    //                     ->join('layanans', 'orders.id_layanan', '=', 'layanans.id')
    //                     ->join('users', 'orders.id_user', '=', 'users.id')
    //                     ->where('code', $id)
    //                     ->get();
    //     return view('memberview.memberorder.done', $data);
    // }
    public function edit($id)
    {
        //
        $data['judul'] = 'Edit Layanan';
        $data['class'] = 'status';
        $data['subclass'] = 'status';
        $data['q'] = Order::where('code', $id)->get();
        return view('memberview.memberorder.done', $data);
    }

    
    public function done(Request $request, $id)
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
        $aksi->status_order = 2; // 1 = sudah di ambil
        $aksi->save();

        return redirect()->route('member.order')->with('succes','Data Berhasil di Input');
    }


    // public function done(Request $request, $id)
    // {
    //     //
    //     $request->validate([
    //         'code' => 'required',
    //     ]);
    //     $q = Order::where('code',$id)->get();
    //     foreach ($q as $dt){
    //         $ids = $dt->id;
    //     }
        
    //     $aksi = Order::find($ids);
    //     $aksi->status_order = 2; // 1 = sudah di ambil
    //     $aksi->save();
    //     // if(!empty($request->file('foto'))){
    //     //     $nama_file = time().'.'.$request->file('foto')->getClientOriginalName();
    //     //     $request->file('foto')->move(public_path('image'), $nama_file);
    //     //     $aksi->foto = $nama_file;
    //     // }

    //     $aksi->save();

    //     return redirect()->route('memberview.memberorder')->with('succes','Data Berhasil di Input');
    // }
    public function adminHome()
    {
        $d['judul'] = 'Dashboard';
        $d['class'] = 'home';
        $d['subclass'] = 'home';
        $d['q'] = Order::all();
        $d['totalorder'] = Order::count();
        $d['orderselesai'] = Order::where('status_order', "=", 2)->count();
        $d['totalmember'] = User::where('is_admin', "=", 0)->count();
        $d['totalgrapher'] = User::where('is_admin', "=", 2)->count();
        return view('admin/home',$d);
    }
    public function area()
    {
        if (auth()->user()->is_admin == 1) {            //admin
            return redirect()->route('admin.home');
        }elseif (auth()->user()->is_admin == 2){        //photographer
            return redirect()->route('grapher.home');
        }elseif (auth()->user()->is_admin == 0){        //member
                return redirect()->route('memberview.home');
        }
    }
    public function frontgrapherHome()
    {
        $d['judul'] = 'Dashboard';
        $d['class'] = 'home';
        $d['subclass'] = 'home';
        return view('grapher/front',$d);
    }
    public function frontadminHome()
    {
        $d['judul'] = 'Dashboard';
        $d['class'] = 'home';
        $d['subclass'] = 'home';
        return view('admin/front',$d);
    }
    public function frontmemberviewHome()
    {
        $d['judul'] = 'Dashboard';
        $d['class'] = 'home';
        $d['subclass'] = 'home';
        return view('memberview/front',$d);
    }
    public function grapherHome()
    {
        $d['judul'] = 'Dashboard';
        $d['class'] = 'home';
        $d['subclass'] = 'home';
        $d['q'] =    DB::table('orders')
                        ->join('layanans', 'orders.id_layanan', '=', 'layanans.id')
                        ->join('users', 'orders.id_user', '=', 'users.id')
                        ->where('id_grapher','0')
                        ->get();
                        
        $d['orderselesai'] = Order::where('status_order',"=",2)->count();
        
        $d['orderproses'] = Order::where('status_order',"=",1)->count();

        $d['totalgrapher'] = User::where('is_admin','-',2)->count();

        $d['totalmember'] = User::where('is_admin','-',0)->count();

        return view('grapher/home',$d);

    }
    public function memberviewHome()
    {
        $d['judul'] = 'Dashboard';
        $d['class'] = 'home';
        $d['subclass'] = 'home';
        $d['q'] =    DB::table('orders')
                        ->join('layanans', 'orders.id_layanan', '=', 'layanans.id')
                        ->where('id_user', \Auth::user()->id)
                        ->get();
        $data['totalorder'] = Order::count();
        $data['orderselesai'] = Order::where('status_order', "=", 2)->count();
        $data['totalmember'] = User::where('is_admin', "=", 0)->count();
        $data['totalgrapher'] = User::where('is_admin', "=", 2)->count();
        return view('memberview/home',$d);
    }

    public function orderviewHome()
    {
        $d['judul'] = 'Dashboard';
        $d['class'] = 'home';
        $d['subclass'] = 'home';
        return view('orderview/home',$d);
    }
    public function layananviewHome()
    {
        $d['judul'] = 'Dashboard';
        $d['class'] = 'home';
        $d['subclass'] = 'home';
        return view('layananview/home',$d);
    }
}
