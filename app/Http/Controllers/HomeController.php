<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Http;

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
        $response = Http::get('https://equran.id/api/surat');
        $data = $response->json();
        if (Auth::user()->role == 'admin') {
            return view('admin.home');
        } elseif(Auth::user()->role == 'petugas') {
            return view('petugas.home');
        } else {
            return view('user.home',compact('data'));
        }   
    }
    
    public function info()
    {
        $response = Http::get('https://equran.id/api/surat');
        $data = $response->json();
        dd($data);
        // return view('')
    }
}
