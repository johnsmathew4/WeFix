@extends('home')

@section('extra')


    <div id="modal1" class="modal">
        <div class="modal-content">

            <h3 style="color:grey;" align="center">Wefixer</h3>
            <div class="row">
                <form  class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                    {{ csrf_field() }}

                    <div class="row">
                        <div style="{{$errors->has('name') ? 'color: red;': "" }}" class="input-field col s12">
                            <i class="material-icons prefix"style="color:#e40046 ">account_circle</i>
                            <input value="{{ old('name') }}" onclick = "{{$errors->has('name') ? "this.style.boxShadow = '0 0 0 red'" : ""}}"
                                   onmouseover= "{{$errors->has('name') ? "this.style.borderBottom = '1px solid red'" : ""}}" id="name"  name="name" type="text" class="validate">
                            <label  style="{{$errors->has('name') ? "color: red;"  : ""}} "for="name">Name</label>
                            <small style="{{$errors->has('name') ? "color:red" : ""}}" >  @if ($errors->has('name'))

                                    {{ $errors->first('name') }}

                                @endif </small>
                        </div>
                    </div>

                    <input  type="hidden"  name="role_id" value=0>
                    <div class="row">
                        <div style="{{$errors->has('email') ? 'color: red;': "" }}" class="input-field col s12">

                            <i class="material-icons prefix"style="color:#e40046 ">email</i>
                            <input value="{{ old('email') }}"onclick = "{{$errors->has('email') ? "this.style.boxShadow = '0 0 0 red'" : ""}}"
                                   onmouseover= "{{$errors->has('email') ? "this.style.borderBottom = '1px solid red'" : ""}}" id="email"  name="email" type="email" class="validate">
                            <label  style="{{$errors->has('email') ? "color: red;"  : ""}} "for="email">Email</label>
                            <small style="{{$errors->has('email') ? "color:red" : ""}}" >  @if ($errors->has('email'))

                                    {{ $errors->first('email') }}

                                @endif </small>
                        </div>
                    </div>







                    <div class="row">
                        <div style="{{$errors->has('password') ? 'color: red;': "" }}" class="input-field col s12">
                            <i class="material-icons prefix"style="color:#e40046 ">lock</i>
                            <input value="{{ old('password') }}"onclick = "{{$errors->has('password') ? "this.style.boxShadow = '0 0 0 red'" : ""}}"
                                   onmouseover= "{{$errors->has('password') ? "this.style.borderBottom = '1px solid red'" : ""}}" id="password"  name="password" type="password" class="validate">
                            <label  style="{{$errors->has('password') ? "color: red;"  : ""}} "for="password">Password</label>
                            <small style="{{$errors->has('password') ? "color:red" : ""}}" >  @if ($errors->has('password'))

                                    {{ $errors->first('password') }}

                                @endif </small>
                        </div>
                    </div>


                    <div class="row">
                        <div style="{{$errors->has('password_confirmation') ? 'color: red;': "" }}" class="input-field col s12">
                            <i class="material-icons prefix "style="color:#e40046 ">lock_outline</i>

                            <input onclick = "{{$errors->has('password_confirmation') ? "this.style.boxShadow = '0 0 0 red'" : ""}}"
                                   onmouseover= "{{$errors->has('password_confirmation') ? "this.style.borderBottom = '1px solid red'" : ""}}" id="password_confirmation"  name="password_confirmation" type="password" class="validate">
                            <label  style="{{$errors->has('password_confirmation') ? "color: red;"  : ""}} "for="password_confirmation">Confirm Password</label>
                            <small style="{{$errors->has('password_confirmation') ? "color:red" : ""}}" >  @if ($errors->has('password_confirmation'))

                                    {{ $errors->first('password_confirmation') }}

                                @endif </small>
                        </div>
                    </div>


                    <div class="input-field col s12">
                        <i class="material-icons prefix"style="color:#e40046 ">location_on</i>
                        <select id="loc" name="location_id">

                            @if ($location)
                                @foreach($location as $loc)

                                    <option value="{{$loc->id}}">{{$loc->location}}</option>
                                @endforeach
                            @endif
                        </select>
                        <label>Location</label>
                    </div>





                    <div class="input-field col s12">
                        <i class="material-icons prefix"style="color:#e40046 ">work</i>
                        <select name="profession_id">

                            @if ($profession)
                                @foreach($profession as $pro)

                                    <option value="{{$pro->id}}">{{$pro->name}}</option>
                                @endforeach
                            @endif
                        </select>
                        <label>Profession</label>
                    </div>






















                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" style=" background-color: #e40046;margin-left: 280px" class="btn btn-primary pulse">
                                <i class="fa fa-btn fa-user "></i> Register
                            </button>
                        </div>
                    </div>
                </form>
            </div>



        </div>

    </div>

@endsection

@section('jquery')

    <script type="text/javascript">



        $(document).ready(function() {
            $('#modal1').modal('open');

        });

    </script>
@endsection