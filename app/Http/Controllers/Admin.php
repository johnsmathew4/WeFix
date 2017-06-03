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

    {$location=Location::paginate(2);



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
        if(User::whereLocationId($id)->count()) {

            return redirect('/admin/location')->with('status','fgfg');
        }
        $loc=Location::find($id);
        $loc->delete();

        return redirect('/admin/location');
            
    }

    public function inactive()
    {

        $user=User::whereRoleId(0)->where('isactive',0)->paginate(6);


        return view('admin.inactive',compact('user'));
    }
     
public function wefixer_delete($id)
{
    
    $user=User::find($id);
    $user->delete();
    
    return redirect()->back();
}
    
    public function wefixer_active($id)
    {
        
        $user=User::find($id);
        $user->isactive=1;
        $user->update();
        return redirect()->back();
        
    }

    public function active()
    {

        $user=User::whereRoleId(0)->where('isactive',1)->paginate(6);


        return view('admin.wefix',compact('user'));
    }

    public function wefixer_inactive($id)
    {

        $user=User::find($id);
        $user->isactive=0;
        $user->update();
        return redirect()->back();

    }
    public function user()
    {

        $user=User::whereRoleId(1)->paginate(6);


        return view('admin.users',compact('user'));
    }

}
