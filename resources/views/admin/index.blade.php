@extends('layouts.app')


@section('content')
<div class="container">
   <h5 align="center"> Dashboard </h5>



<div class="row">

    <a href="{{route('admin.user')}}">
          <div class="col s12 m6">
              <div class="card hoverable  blue">

              <h3 style="padding-top: 50px;text-align:center"  class="white-text">Registered Users </h3>

              <h4 style="text-align:center " class="white-text">{{$users}}</h4>
                  </div>
          </div>
    </a>

    <a href="{{route('admin.active')}}">
        <div class="col s12 m6">
            <div class="card hoverable  teal">

                <h3 style="padding-top: 50px;text-align:center"  class="white-text">Active Workers</h3>

                <h4 style="text-align:center " class="white-text">{{$active}}</h4>
            </div>
        </div>
    </a>




</div>



    <div class="row">

        <a href="{{route('admin.location')}}">
            <div class="col s12 m6">
                <div class="card hoverable  red">

                    <h3 style="padding-top: 50px;text-align:center"  class="white-text">Locations</h3>

                    <h4  style="text-align:center "  class="white-text">{{$location}}</h4>
                </div>
            </div>
        </a>

        <a href="{{route('admin.inactive')}}#">
            <div class="col s12 m6">
                <div class="card hoverable  amber darken-1">

                    <h3 style="padding-top: 50px;text-align:center"  class="white-text">InActive Workers</h3>

                    <h4 style="text-align:center " class="white-text">{{$inactive}}</h4>
                </div>
            </div>
        </a>




    </div>





</div>

@endsection