<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Addres;
use App\Models\Personel;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Persons=Personel::all();

        return view('front/person/index',compact('Persons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('front/person/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //Create Person

        $Person=new Personel();
        $Person->name=$request->name;
        $Person->birthday=$request->birthday;
        $Person->gender=$request->gender;
        $Person->save();

        return redirect('/person');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        //Person
        $Person=Personel::findOrFail($id);
        $Address=Addres::where('person_id',$id)->orderByDesc('id')->paginate(5);

        return view('front/person/show',compact('Person','Address'));

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
        if($request->birthday==NULL){
            $birthday=$request->birthdaycurrent;
        }else{
            $birthday=$request->birthday;
        }

        $Person=Personel::find($id);
        $Person->name=$request->name;
        $Person->birthday=$birthday;
        $Person->gender=$request->gender;
        $Person->save();


        return redirect("person/$id");

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
