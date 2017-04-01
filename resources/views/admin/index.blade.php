@extends('layouts.app')


@section('content')


    Dashboard

1st card

<br>


<br>
<a  href="#"  > Registeres Users   {{$users}}</a>

    <br>

2nd card

<br>
<a  href="#"  > Active WWorkers {{$active}}</a>

<br>



<br>


3nd card

<br>

<a  href="#"  >   Inactive WWorkers {{$inactive}}</a>
<br>



<br>

4thnd card

<br>
<a  href="{{route('admin.location')}}"  >  Locations {{$location}}</a>

<br>



<br>


@endsection