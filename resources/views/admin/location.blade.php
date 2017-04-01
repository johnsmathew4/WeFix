@extends('layouts.app')


@section('content')


    @php
    $c=1;
    @endphp

        <h2  align="center" >Locations</h2>


    <!-- Modal Structure -->
    <div id="modal1" class="modal">
        <div class="modal-content">

            <h3 style="color:grey;" align="center">Add Location</h3>
            <div class="row">
                <form  class="form-horizontal" role="form" method="POST" action="{{route('admin.add')}}">
                    {{csrf_field()}}

                    <div class="row">
                        <div style="{{$errors->has('location') ? 'color: red;': "" }}" class="input-field col s12">
                            <input value="{{ old('location') }}" onclick = "{{$errors->has('location') ? "this.style.boxShadow = '0 0 0 red'" : ""}}"
                                   onmouseover= "{{$errors->has('location') ? "this.style.borderBottom = '1px solid red'" : ""}}" id="location"  name="location" type="text" class="validate">
                            <label  style="{{$errors->has('location') ? "color: red;"  : ""}}" for="location">Name</label>
                            <small style="{{$errors->has('location') ? "color:red" : ""}}" >  @if ($errors->has('location'))

                                    {{ $errors->first('location') }}

                                @endif </small>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" style=" background-color: #e40046;" class="btn btn-primary">
                                <i class="fa fa-btn fa-user"></i> Add Location
                            </button>
                        </div>
                    </div>
                </form>
            </div>


        </div>

    </div>



    <div class="container">

        <div class="fixed-action-btn">
            <a href="#modal1" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>

        </div>
<div class="row">

    @foreach($location as $loc)
     @php
        $c++;
    @endphp

            <div class="col s12 m6">
                <div class="card hoverable  @if($c%3) red @else teal @endif">

<h2 style="padding-top: 50px" align="center " class="white-text">{{$loc->location}}</h2>

                    <form method="POST" id="{{$loc->id}}"action="{{route('admin.location.delete',['id'=>$loc->id])}}">

                       <input type="hidden" name="_method" value="DELETE">
                        {{csrf_field()}}



                        <a onclick="document.getElementById('{{$loc->id}}').submit()" class="btn-floating halfway-fab waves-effect waves-light  red accent-3"><i class="material-icons">delete</i></a>

                    </form>




                    </div>
                </div>


    @endforeach



</div>


        <ul class="pagination">
            <li class="disabled"><a href="{{$location->previousPageUrl()}}"><i class="material-icons">chevron_left</i></a></li>
            @for($i=1;$i<=$location->total()/2;$i++)
            <li class="@if($i==$location->currentPage()) active @endif "><a href="{{$location->url($i)}}">{{$i}}</a></li>

           @endfor
            <li class="waves-effect"><a href="{{$location->nextPageUrl()}}"><i class="material-icons">chevron_right</i></a></li>

        </ul>


</div>






@endsection

@section('jquery')

    <script type="text/javascript">

        {!!$errors->has('location') ? "$(document).ready(function() {
            $('#modal1').modal('open');      });": "" !!}





    </script>
@endsection