@extends('layouts.app')

@section('content')
    <ul class="collection">

        <li class="collection-item avatar">
            <i class="material-icons circle">account_circle</i>
            <span class="title">Name</span>
            <p> <h5>{{$us->name}}</h5>

            </p>

        </li>
        <li class="collection-item avatar">
            <i class="material-icons circle green">email</i>
            <span class="title">Email</span>
            <p> <h5>{{$us->email}}</h5>

        </li>
        <li class="collection-item avatar">
            <i class="material-icons circle red">location_on</i>
            <span class="title">Location</span>
            <p> <h5>{{$us->location->location}}</h5>

        </li>
        <li class="collection-item avatar">
            <i class="material-icons circle blue">phone</i>
            <span class="title">Phone No</span>
            <p> <h5>{{$us->number}}</h5>

        </li>
        <li class="collection-item avatar">
            <i class="material-icons circle teal">store</i>
            <span class="title">Address</span>
            <p> <h5>{{$us->address}}</h5>

        </li>
    </ul>


    @if($feed)
    <h2 align="center">Feed </h2>

    <ul class="collection">

        <li class="collection-item avatar">
            <i class="material-icons circle yellow ">star</i>
            <span class="title">Rating</span>
            <p> <h5>{{$feed->rating}}</h5>



        </li>
        <li class="collection-item avatar">
            <i class="material-icons circle green">insert_chart</i>
            <span class="title">Feedback</span>
            <p> <h5>{{$feed->feedback}}</h5>

        </li>

    </ul>

@else
        <h2 align="center">No Feed </h2>



@endif











@endsection