<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KartuKredit;

class KartuKreditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return KartuKredit::with('akun')->paginate(10);
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
    public function store(Request $request)
    {
        //
        $request->validate([
            'akun' => 'required|unique:kartu_kredits,akun|max:255',
        ]);
        $kartuKredit = KartuKredit::create($request->all());
        if($kartuKredit){
          return response(200);
        } else {
          return response(500);
        }
    }

    public function search(Request $request){

        $kartuKredit = KartuKredit::where('limit','LIKE',"%$request->q%")
                          ->orWhere('akun','LIKE',"%$request->q%")
                          ->paginate(10);
        if($kartuKredit){
          return response(200);
        } else {
          return response(500);
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
        return KartuKredit::find($id);
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
        $request->validate([
            'akun' => 'required|unique:kartu_kredits,akun,'.$id.'|max:255',
        ]);

        $kartuKredit = KartuKredit::find($id)->update($request->all());
        if($kartuKredit){
          return response(200);
        } else {
          return response(500);
        }

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
        $kartuKredit = KartuKredit::destroy($id);
        if($kartuKredit){
          return response(200);
        } else {
          return response(500);
        }
    }
}
