<?php

namespace App\Http\Controllers;

use App\models\MGuru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datguru=MGuru::all();
        $title="Data Guru";
        return view('admin.dataguru',compact('title','datguru'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title="Tambah Data Guru";
        return view('admin.input',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validasi=$request->validate([
            'nip'=>'required',
            'nama'=>'required',
            'status'=>'required',
            'profesi'=>'required'
        ]);

        $validasi['id_guru']=Auth::id();
        MGuru::create($validasi);
        return redirect('dataguru')->with('success','Data berhasil disimpan');
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
        $datguru=MGuru::find($id);
        $title="Edit Data Guru";
        return view('admin.input',compact('title','datguru'));
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
        $validasi=$request->validate([
            'nip'=>'required',
            'nama'=>'required',
            'status'=>'required',
            'profesi'=>'required'
        ]);
        $validasi['id_guru']=Auth::id();
        MGuru::where('id',$id)->update($validasi);
        return redirect('dataguru')->with('success','Data berhasil terupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datguru=MGuru::find($id);
        if($datguru != null){
            MGuru::where('id',$id)->delete();
        }
        return redirect('dataguru')->with('success','Data berhasil dihapus');
    }

}
