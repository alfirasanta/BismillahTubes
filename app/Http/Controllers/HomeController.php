<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $pageTitle = 'Home';
        return view('home',['pageTitle' => $pageTitle]);
    }

    public function barangmasuk()
    {
        $pageTitle = 'Barang Masuk';
        return view('form_in',['pageTitle' => $pageTitle]);
    }

    public function barangkeluar()
    {
        $pageTitle = 'Barang Keluar';
        return view('form_out',['pageTitle' => $pageTitle]);
    }

   public function barangedit()
   {
        $pageTitle = 'Barang Edit';
        return view('edit',['pageTitle' => $pageTitle]);
    }


}
