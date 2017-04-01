@extends('layouts.app')

@section('content')
<h1 align="center" >Orders</h1>


<table class="table table-striped">
    <thead>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Date</th>

    </tr>
    </thead>
    <tbody>
    @php
    $i=1;
    @endphp

    @foreach($orders as $order)


        <th scope="row">{{$i++}}</th>




        <td>   <a style="display: block ;text-decoration: none"  href="{{route('wefixer.profile',['id'=> $order->user->id])}} ">{{$order->user->name}}   </a> </td>
        <td>   {{$order->user->email}}  </td>

        <td>{{$order->updated_at->diffForHumans() }} </td>


        </tr>
    @endforeach

    </tbody>
</table>
@endsection