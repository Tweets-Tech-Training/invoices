<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use Illuminate\Http\Request;

class ShowController extends Controller
{



    public function show($id){
        //dd('ddddddd');

        $bill=Bill::findOrFail($id);
        return view('show')->with(['bill'=>$bill]);

    }   //
}
