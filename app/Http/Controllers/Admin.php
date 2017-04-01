<?php

namespace App\Http\Controllers;

use App\Location;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class Admin extends Controller
{
   public function  index()

   {$location=Location::count();
       $users=User::where('role_id','1')
       ->count();

       $active=User::where('role_id','0')
               ->where('isactive','1')->count();
       $inactive=User::where('role_id','0')
           ->where('isactive','0')->count();


      return view('admin.index',compact('active','inactive','users','location'));
   }

    public function  location()

    {$location=Location::all();



        return view('admin.location',compact('location'));
    }
 public function store(Request $request)
 {

     $this->validate($request, [
         'location' => 'required|max:50'

     ]);

     $loc=new Location();
     
     $loc->location=$request['location'];
     $loc->save();
     
     return redirect()->back();
     
 }


    public function  location_delete($id)
    {
        $loc=Location::find($id);
        $loc->delete();

        return redirect()->back(); 
            
    }
     

}
