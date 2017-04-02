@extends('layouts.app')

@section('css')



    <style type="text/css">





    </style>

@endsection

@section('content')


    <div  id="card1" class="container" >

        <div class="col s12 m7">

            <div  class="card horizontal" style="margin-top:20px;padding-top: 10px;height: 500px;padding-left: 5px;">

                <div class="card-image " >
                    <img style="width: 400px" src="{{asset('images/avatar.png')}}"   style="height: 250px;width: 400px;margin-left: 60px;">

                    <div class="card-action">
                        <a  href="#modal4" style="width:150px;margin-left:70px;"   class="btn waves-light waves-effect red">HIRE NOW</a>

                    </div>


                </div>

                <div class="card-stacked">

                    <div class="card-content">
                        <span style="color: gray;font-size: 80%">Name</span>   <h5> {{$us->name}}</h5>
                        <span style="color: gray;font-size: 80%">Email</span> <h5> {{$us->email}}</h5>
                        <span style="color: gray;font-size: 80%">Location</span> <h5>  {{$us->location->location}}</h5>
                        <span style="color: gray;font-size: 80%">Profession</span> <h5>  {{$us->profession->name}}</h5>
                        <span style="color: gray;font-size: 80%">Contact</span><h5> {{$us->number}} </h5>
                        <a href="#ratings"><div   style="height: 30px;width:60px;background-color: #e40046;border-radius: 5px;"><span style="color: white;font-size: large;font-weight: bold;padding-left: 10px;">{{$us->rating}} ☆ </span>
                            </div></a>

                        <a href="#review" ><div   style="margin-top:10px;height:35px;width:200px;background-color:#EEEEEE;color: black;font-family: Arial;border-radius: 5px;font-size: 20px;text-align: center;">Rate and Review</div></a>


                        <div class="card-action" style="margin-top: 10px;padding-left: 0px;">
                          </div>


                    </div>








                    <!-- Modal Structure -->
                    <div id="modal4" class="modal">
                        <div class="modal-content">
                            <i class="medium material-icons" style="margin-left: 312px">assignment_turned_in</i>
                            <h5 style="text-align: center;">Confirm Booking?</h5>

                        </div>
                        <div class="modal-footer">
                            <form method="POST" action="{{ route('user.pay',['id' => $us->id])  }}">
                                {{ csrf_field() }}
                                <button type="submit" style="margin-right:300px;background-color: #e40046;color: white;" class="modal-action modal-close btn waves-light waves-effect">Check Out</button>
                            </form>
                        </div>
                    </div>



                </div>
            </div>

        </div>
    </div>

    <div  id="ratings" class="container" >

        <div class="col s12 m7">

            <div  class="card horizontal" style="margin-top:20px;padding-top: 10px;height: 500px;padding-left: 5px;">

                <div  class="container" style="margin-top:60px; background-color: white">


                    <div><span style="color: black;font-size: 40px;font-weight: bold;padding-left: 10px;">{{$us->rating}}☆ RATINGS </span></div>
                <h5 style="margin-left: 30px; color:gray;" >{{$r}} Ratings</h5>
                    <span style="color: black;font-size: 20px;font-weight: bold;padding-left: 10px;">1☆</span>
              <span style="margin-left: 30px; font-weight: bold">{{$r1}}</span>
                    <div class="progress" style="width: 50%;margin-left: 30px;">
                        <div class="determinate" style="width:@if($r!=0) {{($r1/$r)*100}}@endif%"></div>
                    </div>

                    <span style="color: black;font-size: 20px;font-weight: bold;padding-left: 10px;">2☆</span>
                    <span style="margin-left: 30px; font-weight: bold">{{$r2}}</span>

                    <div class="progress" style="width: 50%;margin-left: 30px;">
                        <div class="determinate" style="width:@if($r!=0) {{($r2/$r)*100}}@endif%"></div>
                    </div>
                    <span style="color: black;font-size: 20px;font-weight: bold;padding-left: 10px;">3☆</span>
                    <span style="margin-left: 30px; font-weight: bold">{{$r3}}</span>
                    <div class="progress" style="width: 50%;margin-left: 30px;">
                        <div><span >1☆</span></div>
                        <div class="determinate" style="width:@if($r!=0) {{($r3/$r)*100}}@endif%"></div>
                    </div>
                    <span style="color: black;font-size: 20px;font-weight: bold;padding-left: 10px;">4☆</span>
                    <span style="margin-left: 30px; font-weight: bold">{{$r4}}</span>
                    <div class="progress" style="width: 50%;margin-left: 30px;">
                        <div class="determinate" style="width:@if($r!=0) {{($r4/$r)*100}}@endif%"></div>
                    </div>
                    <span style="color: black;font-size: 20px;font-weight: bold;padding-left: 10px;" >5☆</span>
                    <span style="margin-left: 30px; font-weight: bold">{{$r5}}</span>
                    <div class="progress" style="width: 50%;margin-left: 30px;">
                        <div class="determinate" style="width:@if($r!=0) {{($r5/$r)*100}}@endif% "></div>


                    </div>
                    <a href="#card1" class="btn-floating btn-small waves-effect waves-light red " style="margin-left: 800px;margin-bottom: 50px; "><i class="material-icons ">keyboard_arrow_up</i></a>


                </div>

            </div>

        </div>
    </div>
    <div  id="review" class="container" style="margin-top: 200px"; >

        <div class="col s12 m7">

            <div  class="card  " style="margin-top:20px;padding-top: 10px;height: 300px;padding-left: 5px;">
                <div class="container" style="background-color: white;width: 70%;">
                    <form  method="POST" action="{{ $edit ? route('user.feed.edit',['id' => $us->id]) : route('user.feeding',['id' => $us->id]) }}">
                        <div id="review" @if(!$booked) class=" tooltipped" data-position="bottom" data-delay="50" data-tooltip="Book a worker first!!"> @endif
                            <div class="form-group">
                                {!! $edit ? '<input type="hidden" name="_method" value="PATCH">' : " " !!}
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleSelect1"style="font-weight: bold;font-size: large;color:#e40046 ">Rating</label>
                                    <select class="form-control" id="rating" name="rating"    @if(!$booked) disabled @endif >
                                        @for($i=1;$i<=5;$i++)
                                            <option @if($edit) @if($i==$feed->rating) {{'selected="selected"'}} @endif @endif value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleTextarea"style="font-weight: bold;font-size: large;color:#e40046 ">Feedback</label>
                                    <textarea class="form-control" id="feed" rows="3"  name="feed"  @if(!$booked) disabled @endif > {{$edit ? $feed->feedback : ""}}</textarea>
                                </div>


                            </div>


                            @if(!$booked)  <a class=" red  btn" onclick="Materialize.toast('Book To Worker To Rate', 4000)">Post!</a> @endif



                            @if($booked) <button  style="background-color: #e40046;margin-top: 5px;" type="submit" class="waves-effect waves-light btn #e40046"><i class="material-icons left">{{$edit ? "edit" : "done"}}</i>{{$edit ? "Edit Feed" : "Post Feed"}}</button>

                        </div> @endif
                    </form>

                    @if($edit)
                        <form method="POST" action="{{ route('user.feed.delete',['id' => $us->id])  }}">

                            {!! $edit ? '<input type="hidden" name="_method" value="DELETE">' : " " !!}
                            {{ csrf_field() }}


                            <div class="container">

                                <button  style="background-color: #e40046;margin-top: 25px;" type="submit" class=" waves-effect waves-light btn "><i class="material-icons left">delete</i>Discard Feed</button>
                            </div>
                        </form>

                    @endif
                </div>


            </div>

        </div>
    </div>














@if($feeding)


    <ul class="collection" style="width: 70%;margin: 0 auto;">
        <h4 style="text-align: center;">Ratings and feedback</h4>
        <li class="collection-item avatar">


            @foreach($feeding as $f)
                <img  src="{{asset('images/avatar.png')}}"  alt="" class="circle">
                <p  >{{$f->rating}}<span>☆</span> <br>
                    {{$f->feedback}} <br>
                    {{$f->updated_at->diffForHumans() }}

                </p>
                <hr>
            @endforeach
        </li>
    </ul>

@else
    <h4 style="text-align: center;"> No  Feeds</h4>


@endif




@endsection


@section('jquery')
    <script type="text/javascript">

        $(document).ready(function(){
            // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
            $('.modal').modal();
        });

        $('#example').popover(options)



    </script>
@endsection