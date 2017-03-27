<?php

namespace App\Http\Controllers;

use App\Book;
use App\Feed;
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

}
