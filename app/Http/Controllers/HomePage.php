<?php

namespace App\Http\Controllers;

use App\Models\Addres;
use App\Models\Personel;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class HomePage extends Controller
{
    //HomePage
    public function index(){

        $Persons=Personel::all();
        $Address=Addres::count();

        return view('front/index',compact('Persons','Address'));

    }
}
