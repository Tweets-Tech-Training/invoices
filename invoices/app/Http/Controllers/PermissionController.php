<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\User;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function permission($id)
    {
     //   $links = Link::all();
        $user = User::find($id);
     return view('permission',compact('user'))->extends('dashboard_layout.main');
    }

    public function postPermission($id, Request $request){

        \DB::table('user_links')->where('user_id',$id)->delete();
        if($request->links){
            foreach($request->links as $link){
                \DB::table('user_links')->insert([
                    'link_id'=>$link,
                    'user_id'=>$id,
                    'created_at'=>new \DateTime(),
                    'updated_at'=>new \DateTime(),
                ]);
            }
        }
       return redirect('user');

    }
}
