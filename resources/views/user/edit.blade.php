@extends('layouts.app')


@section('content')
<div class="container">
<h3 style="color:grey;" align="center">Edit Profile</h3>
<div class="row">
    <form  class="form-horizontal" role="form" method="POST" action="{{ route('user.edited') }}">
        {{ csrf_field() }}

        <div class="row">
            <div style="{{$errors->has('name') ? 'color: red;': "" }}" class="input-field col s12">
                <input value="{{ $user->name }}" onclick = "{{$errors->has('name') ? "this.style.boxShadow = '0 0 0 red'" : ""}}"
                       onmouseover= "{{$errors->has('name') ? "this.style.borderBottom = '1px solid red'" : ""}}" id="name"  name="name" type="text" class="validate">
                <label  style="{{$errors->has('name') ? "color: red;"  : ""}}" for="name">Name</label>
                <small style="{{$errors->has('name') ? "color:red" : ""}}" >  @if ($errors->has('name'))

                        {{ $errors->first('name') }}

                    @endif </small>
            </div>
        </div>

        <input  type="hidden"  name="role_id" value=1>
        <div class="row">
            <div style="{{$errors->has('email') ? 'color: red;': "" }}" class="input-field col s12">
                <input value="{{ $user->email }}" onclick = "{{$errors->has('email') ? "this.style.boxShadow = '0 0 0 red'" : ""}}"
                       onmouseover= "{{$errors->has('email') ? "this.style.borderBottom = '1px solid red'" : ""}}" id="email"  name="email" type="email" class="validate">
                <label  style="{{$errors->has('email') ? "color: red;"  : ""}}" for="email" >Email</label>
                <small style="{{$errors->has('email') ? "color:red" : ""}}" >  @if ($errors->has('email'))

                        {{ $errors->first('email') }}

                    @endif </small>
            </div>
        </div>


        <div class="row">
            <div style="{{$errors->has('number') ? 'color: red;': "" }}" class="input-field col s12">

                <input value="{{$user->number }}" onclick = "{{$errors->has('number') ? "this.style.boxShadow = '0 0 0 red'" : ""}}"
                       onmouseover= "{{$errors->has('number') ? "this.style.borderBottom = '1px solid red'" : ""}}" id="number"  name="number" type="number" class="validate">
                <label  style="{{$errors->has('number') ? "color: red;"  : ""}} "for="number">Mobile No</label>
                <small style="{{$errors->has('number') ? "color:red" : ""}}" >  @if ($errors->has('number'))

                        {{ $errors->first('number') }}

                    @endif </small>
            </div>
        </div>

        <div class="row">
        <div class="input-field col s12">
            <select id="loc" name="location_id">

                @if ($location)
                    @foreach($location as $loc)

                        <option @if($loc->id==$user->location_id)  {{'selected="selected"'}} @endif value="{{$loc->id}}">{{$loc->location}}</option>
                    @endforeach
                @endif
            </select>
            <label>Location</label>
        </div>
</div>

        <div class="input-field col s12">

            <textarea name='address' id="textarea1" class="materialize-textarea">{{ $user->address}}</textarea>
            <label for="textarea1">Address</label>
            <small style="{{$errors->has('address') ? "color:red" : ""}}" >  @if ($errors->has('address'))

                    {{ $errors->first('address') }}

                @endif </small>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" style=" background-color: #e40046;" class="btn btn-primary">
                    <i class="fa fa-btn fa-user teal"></i> Apply Changes
                </button>
            </div>
        </div>
    </form>
</div>
</div>
    @endsection