<?php

namespace App\Http\Controllers;

use App\User;
use App\Kendaraan;
use App\Customer;
use App\Rental;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = Customer::where('id_user', auth()->user()->id)->get()->all();
        return view('customer.list', compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customer = Customer::all();
        $user = User::all();
        return view('customer.pesan', compact('customer', 'user'));
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
        
        if($request->hasFile('foto_ktp'))
        {
            $destination_path = 'public/images/ktp';
            $image = $request -> file('foto_ktp');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('foto_ktp')->storeAs($destination_path, $image_name);
            $input['foto_ktp'] = $image_name;
        }

        if($request->hasFile('foto_sim'))
        {
            $destination_path = 'public/images/sim';
            $image = $request -> file('foto_sim');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('foto_sim')->storeAs($destination_path, $image_name);
            $input['foto_sim'] = $image_name;
        }


        Customer::create($input);

        return redirect('customer')->with('Data Anda Berhasil Ditambahkan!');
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
}