<?php

namespace App\Http\Controllers;

use App\Book;
use App\Feed;
use App\Location;
use App\Profession;
use App\User;
use Auth;
use Illuminate\Http\Request;

use App\Http\Requests;

class WefixController extends Controller
{
    public function index()
        
        
    {
        $orders=Book::where('worker_id',Auth::user()->id)
            ->orderBy('created_at','desc')
            ->get();

        return view('wefixer.index',compact('orders'));
    }


    public function profile($id)

    {

        $us = User::find($id);


        $feed =Feed::where('user_id', $id)
            ->where('workerid', Auth::user()->id)
            ->first();



        return view('wefixer.profile',compact('us','feed'));




    }


    public function edit_profile()
    {

        $location=Location::all();
        $profession=Profession::all();
        $user=User::find(Auth::user()->id);






        return view('wefixer.edit',compact('location','profession','user'));

    }


    public function edited_profile(Request $request)
    {



        $this->validate($request, [
            
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'number' => 'required'

        ]);
        $location=Location::all();
        $profession=Profession::all();
        $user=User::find(Auth::user()->id);
        $user->profession_id= $request['profession_id'];
        $user->location_id= $request['location_id'];
        $user->name=$request['name'];
        $user->number=$request['number'];
        $user->address=$request['address'];
        $user->email=$request['email'];
        $user->update();




        return redirect()->back();

    }


}
