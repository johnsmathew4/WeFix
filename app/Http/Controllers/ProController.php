<?php

namespace App\Http\Controllers;

use App\Location;
use App\Profession;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProController extends Controller
{
public function  show($pro)
{
    $prof= Profession::where('name',$pro)->first();

$user= $prof->users->where('role_id',0)->all();



       return view('user.show')->with('user',$user);






}
}
