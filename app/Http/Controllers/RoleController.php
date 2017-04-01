<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;

use Auth;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        if(Auth::check())
{
    {
        if( Auth::user()->role_id==0)
    {
        return redirect('/wefixer');
    }
        if( Auth::user()->role_id==2)
        {
            return redirect('/admin');
        }

        return redirect('/user');

    }
}
        else
        {
            return redirect('/');
        }
        }
    }
