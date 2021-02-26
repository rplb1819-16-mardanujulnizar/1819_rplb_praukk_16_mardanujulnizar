<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Outlet;

class OutletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $outlet = Outlet::paginate(10);

        return view('dashboard.outlet.index', compact('outlet'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.outlet.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_outlet' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'email' => 'required'
        ]);

        $input = $request->all();
        $validasi = Outlet::create($input);
        if($validasi) :
            return redirect('/dashboard/outlet')->with('status', 'Data Outlet Berhasil di Tambahkan!');
        endif;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $outlet = Outlet::findOrFail($id);
        return view('dashboard.outlet.show', compact('outlet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $outlet = Outlet::findOrFail($id);
        return view('/dashboard/outlet/edit', compact('outlet'));
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
        $this->validate($request, [
            'nama_outlet' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'email' => 'required'
        ]);

        $input = $request->all();
        $outlet = Outlet::findOrFail($id);
        $validasi = $outlet->update($input);

        if($validasi) :
        return redirect('/dashboard/outlet')->with('status', 'Data Outlet Berhasil di Edit!');
        endif;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $outlet = Outlet::findOrFail($id);
        $validasi = $outlet->delete();
        if($validasi) :
        return redirect('/dashboard/outlet')->with('status', 'Data Outlet Berhasil di Hapus!');
        endif;
    }
}
