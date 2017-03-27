@extends('layouts.app')

@section('content')
    <ul class="collection">

        <li class="collection-item avatar">
            <i class="material-icons circle">folder</i>
            <span class="title">Name</span>
            <p> <h5>{{$us->name}}</h5>

            </p>
            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
        </li>
        <li class="collection-item avatar">
            <i class="material-icons circle green">insert_chart</i>
            <span class="title">Email</span>
            <p> <h5>{{$us->email}}</h5>
            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
        </li>
        <li class="collection-item avatar">
            <i class="material-icons circle red">play_arrow</i>
            <span class="title">Location</span>
            <p> <h5>{{$us->location->location}}</h5>
            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
        </li>
    </ul>

    <h2 align="center">Feed </h2>

    <ul class="collection">

        <li class="collection-item avatar">
            <i class="material-icons circle">folder</i>
            <span class="title">Rating</span>
            <p> <h5>{{$feed->rating}}</h5></p>


            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
        </li>
        <li class="collection-item avatar">
            <i class="material-icons circle green">insert_chart</i>
            <span class="title">Feedback</span>
            <p> <h5>{{$feed->feedback}}</h5>
            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
        </li>

    </ul>


















@endsection