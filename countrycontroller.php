<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\countrylist;
use App\SecondModel;
use DB;

class CountryController extends Controller
{
    public function store(Request $request) 
    /*storing data in a data base*/
    {
        $country = $request->get('country');
        DB::table('countrylists')->insert(['country'=>$country]);
        echo $country.' is stored in the database';
    }
    public function fetch()
    {
      $datas= DB::table('countrylists')->get();
       return view ('select',compact('datas'));

    }
    public function storeagain( Request $request)
    {
        SecondModel::create($request->all());
        return redirect()->route('SecondModels.list');

    }

    public function list()
    {
      $countries= SecondModel::with('country')->get();
       return view ('list',compact('countries'));

    }





}

 
