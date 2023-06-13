<?php

namespace App\Http\Controllers;

use App\Rental;
use App\Kendaraan;
use App\User;
use App\Customer;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth()->user()->level == 'admin') {
            $rental = Rental::all();
        } else { 
            $rental = Rental::where('id_user', auth()->user()->id)->get()->all();
        }
        $kendaraan = Kendaraan::all();
        if(Auth()->user()->level == 'admin') {
        return view('admin.pesanan_list', compact('rental', 'kendaraan'));    
        } else {
        return view('rental.list_rental', compact('rental', 'kendaraan'));
            
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $rental = Rental::all();
        return view('rental.input', compact('rental'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Rental::create($input);
        return redirect('rental')->with('Data Anda Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kendaraan = Kendaraan::find($id);
        $rental = Rental::all();
        $profile = Customer::where('id_user', Auth()->user()->id)->get()->all();
        return view('rental.input', compact('rental', 'kendaraan', 'profile'));
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
        Rental::find($id)->update($request->all());
        return back()->with('Data Anda Berhasil Diubah!');
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