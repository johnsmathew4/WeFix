<?php

namespace App\Http\Controllers;

use App\Feed;
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


    public function profile($id)

    {

          $us = User::find($id);
        $edit = DB::table('feeds')
            ->where('workerid', $id)
            ->where('user_id', Auth::user()->id)

            ->count();
        $feed =Feed::where('workerid', $id)
            ->where('user_id', Auth::user()->id)
            ->first();
        $feeding=Feed::where('workerid', $id)->get();

        
            
           return view('user.profile',compact('us','edit','feed','feeding'));




    }

    public function store(Request $request,$id )
    {

        $this->validate($request, [
            'feed' => 'required|max:1000'

        ]);
        $feed = new Feed;

        $feed->workerid =$id;
          $feed->feedback =$request['feed'];
          $feed->rating =$request['rating'];
          $feed->user_id =Auth::user()->id;

           $feed->save();
        return  redirect()->back();
    }


    public function edit(Request $request,$id )
    {

        $this->validate($request, [
            'feed' => 'required|max:1000'

        ]);
        $feed =Feed::where('workerid', $id)
            ->where('user_id', Auth::user()->id)
            ->first();


         

     $feed->feedback =$request['feed'];
      $feed->rating =$request['rating'];


      $feed->update();
       return  redirect()->back();

    }


    public function delete($id)
    {
        $feed =Feed::where('workerid', $id)
            ->where('user_id', Auth::user()->id)
            ->delete();
       return redirect()->back();

    }
}
