
@extends('layouts.app')

@section('content')
    <style type="text/css">
        body {
            background: #ffffff;

        }

        .card {
            background: #fff;
            border-radius: 2px;
            display: inline-block;
            height: 300px;

            width: 300px;
            box-shadow: none;
        }


        .card:hover {
            box-shadow: 0 10px 40px #bdbdbd;
        }



.container
{

    text-align: center;
}




    </style>


    <div class="container">
        <h4>Here are the top {{$pro }}s from {{ Auth::user()->location->location}} </h4>
        <div class="row">
            @foreach($user as $us)
                <div class="col s12 m4">


                    <a href="profile/{{$us->id}}"> <div class="card">


                            <div class="card-image">
                                <img  src="../images/avatar.png" style="height:150px;width:150px;margin-left:75px;border-radius: 50%;">
                            </div>
                            <div class="card-content" >

                                <p  style="font-family: Roboto;font-size: large;font-weight: bold; word-spacing:20px;" > {{$us->name}}  </p>
                                <p style="font-family: Roboto;font-size: large;font-weight: bold" >  {{$us->email}} </p>
                                @if($us->rating==0)
                                    <p style="font-family: Roboto;font-size: large;font-weight: bold;" >Not Rated </p>
                                @else
                                    <p style="font-family: Roboto;font-size: large;font-weight: bold;" >    @php
                                        $dd=$us->rating - floor($us->rating);


                                        @endphp


                                        @for($i=1;$i<=5;$i++)

                                            @if($i<=$us->rating)

                                                <i  style=""   class="material-icons">star</i>
                                            @else

                                                @if($dd>0.3)
                                                    @if($dd=0)
                                                    @endif

                                                    <i    class="material-icons">star_half</i>

                                                @else
                                                    <i     class="material-icons">star_border</i>
                                                @endif


                                            @endif




                                        @endfor
{{$us->rating}}/5


                                </p>

                                    @endif

                            </div>


                        </div></a>

                </div>
            @endforeach
        </div>
    </div>
@endsection


   
   





   
        
 