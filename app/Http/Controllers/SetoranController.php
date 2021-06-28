<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setoran;

class SetoranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $data = Setoran::all();
        return view('user.history', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'nis' => 'required|unique:setorans|digits:6',
            'name' => 'required',
            'juz' => 'required',
            'surat'=> 'required',
            'audio' => 'required|mimes:mp3'
        ]);

        $audio = $request->audio->getClientOriginalName();
        $request->audio->move(public_path('audio'), $audio);
        
        $setor = Setoran::create([
            'nis' => $request->nis,
            'name' => $request->name,
            'juz' => $request->juz,
            'surat' => $request->surat,
            'audio' => $audio
        ]);
        if ($setor) {
            return redirect()->route('user.history')->with('status', 'Berhasil menyetorkan audio');
        }else {
            return back()->with('status', 'Gagal menyetorkan hafalan');
        }


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

    public function history(){
        //
    }
}
