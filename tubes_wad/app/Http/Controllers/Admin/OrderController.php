<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Models\Member;
use App\Models\User;
use App\Models\Order;
use App\Models\Layanan;
use App\Models\Photographer;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['judul'] = 'Data Order';
        $data['class'] = 'order';
        $data['subclass'] = 'order';
        $data['q'] = Order::all();
        $data['totalorder'] = Order::count();
        $data['orderselesai'] = Order::where('status_order', "=", 2)->count();
        $data['totalmember'] = User::where('is_admin', "=", 0)->count();
        $data['totalgrapher'] = User::where('is_admin', "=", 2)->count();
        return view('admin.order.index', $data);
    }

}
