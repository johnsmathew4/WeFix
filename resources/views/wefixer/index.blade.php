@extends('layouts.app')

@section('content')
    <style type="text/css">


        .card:hover {
            box-shadow: 0 10px 40px #e40046;
        }

    </style>
    <h1 align="center" >Orders</h1>


    <div class="row">
        <div class="col s12">
            <ul class="tabs">
                <li class="tab col s3"><a class="active" href="#test2">Pending</a></li>
                <li class="tab col s3"><a href="#test1">Finished</a></li>
                <li class="tab col s3"><a href="#test3">Cancelled</a></li>


            </ul>
        </div>
        <div id="test1" class="col s12">

            <ul class="collection" style="width: 70%;margin: 0 auto">


                @php
                $i=1;
                @endphp


                @foreach($orders as $order)

                    @if($order->finish==1&&$order->finish!=2)





                    <li style="margin-top: 8px" class="collection-item avatar hovereffect z-depth-3 hoverable waves-effect waves-block waves-light">


                        <img  src="{{asset('images/avatar.png')}}"  alt="" class="circle">
                        <a style="display: block ;text-decoration: none"  href="{{route('wefixer.profile',['id'=> $order->user->id])}} ">{{$order->user->name}}</a>


                        {{$order->user->email}}<br>
                        <h5> {{  $order->time->format('d F Y ')}}</h5><br>
                        {{$order->created_at->diffForHumans() }}
                        <br>
                        Finished: {{$order->updated_at->diffForHumans() }}
                        @endif
                    </li>
                @endforeach



            </ul>

        </div>
        <div id="test2" class="col s12">

            <ul class="collection" style="width: 70%;margin: 0 auto">


                @php
                $i=1;
                @endphp


                @foreach($orders as $order)

                    @if($order->finish!=1&&$order->accept!=2)





                        <li style="margin-top: 8px" class="collection-item avatar hovereffect z-depth-3 hoverable waves-effect waves-block waves-light">


                            <img  src="{{asset('images/avatar.png')}}"  alt="" class="circle">
                            <a style="display: block ;text-decoration: none"  href="{{route('wefixer.profile',['id'=> $order->user->id])}} ">{{$order->user->name}}</a>


                            {{$order->user->email}}<br>
                            <h5> {{  $order->time->format('d F Y ')}}</h5><br>
                            {{$order->created_at->diffForHumans() }}
                            <br>

                            @if($order->accept!=1)
                            <form method="POST" action="{{ route('accept',['id' => $order->id])}}">
                                {{ csrf_field() }}
                                <button type="submit" style="margin-right:300px;background-color: #e40046;color: white;" class="modal-action modal-close btn waves-light waves-effect">Accept</button>
                            </form>
                            <br>
                                <form method="POST" action="{{ route('reject',['id' => $order->id])}}">
                                    {{ csrf_field() }}
                                    <button type="submit" style="margin-right:300px;background-color: #e40046;color: white;" class="modal-action modal-close btn waves-light waves-effect">Reject</button>
                                </form>
                                @endif
                            @endif
                        </li>
                        @endforeach



            </ul>

    </div>
        <div id="test3" class="col s12">

            <ul class="collection" style="width: 70%;margin: 0 auto">


                @php
                $i=1;
                @endphp


                @foreach($orders as $order)

                    @if($order->accept==2)





                        <li style="margin-top: 8px" class="collection-item avatar hovereffect z-depth-3 hoverable waves-effect waves-block waves-light">


                            <img  src="{{asset('images/avatar.png')}}"  alt="" class="circle">
                            <a style="display: block ;text-decoration: none"  href="{{route('wefixer.profile',['id'=> $order->user->id])}} ">{{$order->user->name}}</a>


                            {{$order->user->email}}<br>
                            <h5> {{  $order->time->format('d F Y ')}}</h5><br>
                            {{$order->created_at->diffForHumans() }}
                            <br>
                            <form method="POST" action="{{ route('active',['id' => $order->id])}}">
                                {{ csrf_field() }}
                                <button type="submit" style="margin-right:300px;background-color: #e40046;color: white;" class="modal-action modal-close btn waves-light waves-effect">Make Active</button>
                            </form>
                            @endif
                        </li>
                        @endforeach



            </ul>

        </div>
    </div>





@endsection