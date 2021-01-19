<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Addres;
use App\Models\Personel;
use Illuminate\Support\Facades\DB;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Address=DB::table('personels')
        ->join('addres','personels.id','=','addres.person_id')
        ->get();

        return view('front/address/index',compact('Address'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Adres=new Addres();
        $Adres->person_id=$request->person_id;
        $Adres->address=$request->address;
        $Adres->post_code=$request->post_code;
        $Adres->city_name=$request->city_name;
        $Adres->country_name=$request->country_name;
        $Adres->save();

        return redirect('address');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Person=Personel::find($id);

        return view('front/address/create',compact('Person'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $Adres=DB::table('personels')
            ->join('addres','personels.id','=','addres.person_id')
            ->where('addres.id',$id)
            ->first();

        return view('front/address/edit',compact('Adres'));

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

        $Adres=Addres::find($id);
        $Adres->address=$request->address;
        $Adres->post_code=$request->post_code;
        $Adres->city_name=$request->city_name;
        $Adres->country_name=$request->country_name;
        $Adres->save();

        return redirect('address');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Addres::destroy($id);

        return redirect('address');
    }
}
