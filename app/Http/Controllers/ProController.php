<?php

namespace App\Http\Controllers;

use App\Location;
use App\Profession;
use App\User;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProController extends Controller
{
public function  show($pro)
{
    $prof= Profession::where('name',$pro)->first();
    $id=$prof->id;
    $locate=Auth::user()->location_id;

    $user = DB::table('users')
        ->where('profession_id',$id)
        ->where('role_id',0)
        ->where('location_id',$locate)
        ->orderBy('rating', 'desc')
        ->get();



    return view('user.show')->with('user',$user);





}
}
