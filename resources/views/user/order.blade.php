@extends('layouts.app')

@section('content')

    @if (session('status'))
        <div class="row" style="width: 60%">
            <div class="col s12 m5">
                <div class="card-panel green lighten-5 "style="color: #a5d6a7;font-weight: bold;text-align:center;">

                    <div class="alert alert-success"><i class="medium material-icons">done</i>
                        {{ session('status') }}


                    </div>
                </div>
            </div>
        </div>
    @endif










    <ul class="collection" style="width: 70%;margin: 0 auto;">
        <h4 style="text-align: center;">Orders</h4>
        <li class="collection-item avatar">

            @php
            $i=1;
            @endphp
            @foreach($orders as $order)


                <img  src="{{asset('images/avatar.png')}}"  alt="" class="circle">

                <a style="display: block ;text-decoration: none"  href="{{route('user.profile',['id'=> $order->worker->id])}} "> {{$i++}}.  {{$order->worker->name}}</a>
                {{$order->worker->profession->name}}<br>
                {{$order->updated_at->diffForHumans() }}


                <hr>


            @endforeach

        </li>

    </ul>










@endsection
