@extends('layouts.app')

@section('content')

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif



    <h1 align="center" >Orders</h1>


    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Profession</th>
            <th>Date</th>

        </tr>
        </thead>
        <tbody>
        @php
        $i=1;
        @endphp

        @foreach($orders as $order)


            <th scope="row">{{$i++}}</th>




            <td>   <a style="display: block ;text-decoration: none"  href="{{route('user.profile',['id'=> $order->worker->id])}} ">{{$order->worker->name}}   </a> </td>
            <td>   {{$order->worker->profession->name}}  </td>

            <td>{{$order->updated_at->diffForHumans() }} </td>


            </tr>
        @endforeach

        </tbody>
    </table>



if(Auth



@endsection
