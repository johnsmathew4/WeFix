<?php

namespace App\Http\Controllers;

use App\Book;
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

    $user = User::where('profession_id',$id)
        ->where('role_id',0)
        ->where('location_id',$locate)
        ->orderBy('rating', 'desc')
        ->get();


 return view('user.show',compact('user'));





}


    public function profile($id)

    {

          $us = User::find($id);
        $edit = DB::table('feeds')
            ->where('workerid', $id)
            ->where('user_id', Auth::user()->id)

            ->count();

        $booked = DB::table('books')
            ->where('worker_id', $id)
            ->where('user_id', Auth::user()->id)

            ->count();



        $feed =Feed::where('workerid', $id)
            ->where('user_id', Auth::user()->id)
            ->first();
        $feeding=Feed::where('workerid', $id)->get();


          return view('user.profile',compact('us','edit','feed','feeding','booked'));




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

        $this->rater($id);
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
        $this->rater($id);
       return  redirect()->back();

    }


    public function delete($id)
    {
        $feed =Feed::where('workerid', $id)
            ->where('user_id', Auth::user()->id)
            ->delete();
        $this->rater($id);
       return redirect()->back();

    }

    public function pay($id)
    {
        $book = new Book();

        $book->worker_id =$id;


        $book->user_id =Auth::user()->id;

        $book->save();
        $status=" Successfull  ......Worker Booked";

        return  redirect('/users/order')->with('status',$status);

    }

    public function order()
    {
          $orders=Book::where('user_id',Auth::user()->id)
              ->orderBy('created_at','desc')
              ->get();


        return view('user.order',compact('orders'));
    }

   public function rater($id)
   {
       $count =Feed::where('workerid', $id)
              ->count();

       $sum=Feed::where('workerid', $id)
           ->sum('rating');
        $u=User::find($id);
       $u->rating=$sum/$count;
       $u->update();
       
   }
    
    
    public function edit_profile()
 {

     $location=Location::all();
    $profession=Profession::all();
    $user=User::find(Auth::user()->id);






    return view('user.edit',compact('location','profession','user'));

 }


    public function edited_profile(Request $request)
    {



        $this->validate($request, [
            'name' => 'required',

        ]);
        $location=Location::all();
        $profession=Profession::all();
        $user=User::find(Auth::user()->id);

        $user->location_id= $request['location_id'];
        $user->name=$request['name'];
        $user->email=$request['email'];
        $user->update();




        return redirect()->back();

    }

}
