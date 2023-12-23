<?php

namespace App\Http\Controllers\resource\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\verifikasi_umkm;

class VerifikasiUmkmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return verifikasi_umkm::when(request('search'),function($query){
            $query->where('email','like','%'.request('search').'%');
        })->orderBy('id','desc')->paginate(5);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $status = [
            'status' => $request->status,
        ];
        $ubahStatus = verifikasi_umkm::findOrFail($id);
        $ubahStatus->update($status);
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
