@extends('home')

@section('extra')



<div id="modal3" class="modal">
    <div class="modal-content">

        <div class="row">
            <form  class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}


                <div class="row">
                    <div style="{{$errors->has('email') ? 'color: red;': "" }}" class="input-field col s12">
                        <input onclick = "{{$errors->has('email') ? "this.style.boxShadow = '0 0 0 red'" : ""}}"
          onmouseover= "{{$errors->has('email') ? "this.style.borderBottom = '1px solid red'" : ""}}" id="email"  name="email" type="email" class="validate">
                        <label  style="{{$errors->has('email') ? "color: red;"  : ""}} for="email">Email</label>
                        <small style="{{$errors->has('email') ? "color:red" : ""}}" >  @if ($errors->has('email'))

                                {{ $errors->first('email') }}

                            @endif </small>
                    </div>
                </div>

                    
                <div class="row">
                    <div style="{{$errors->has('email') ? 'color: red;': "" }}" class="input-field col s12">
                        <input  onclick = "{{$errors->has('email') ? "this.style.boxShadow = '0 0 0 red'" : ""}}"
                                onmouseover= "{{$errors->has('email') ? "this.style.borderBottom = '1px solid red'" : ""}}"  id="password"  name="password"   type="password" class="validate">
                        <label style="{{$errors->has('email') ? "color: red;"  : ""}}"  for="password">Password</label>
                        <small style="{{$errors->has('email') ? "color:red" : ""}}" >  @if ($errors->has('email'))

                                {{ $errors->first('passsword') }}

                            @endif </small>
                    </div>
                </div>

                <p>
                    <input type="checkbox" name="remember" id="test5" />
                    <label for="test5">Remember Me</label>
                </p>




                <button style="background-color: #c7003d;"  class="btn waves-effect waves-light" type="submit" name="action">Log In
                    <i class="material-icons right">send</i>
                </button>

                        <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>

            </form>
        </div>



    </div>
    <div class="modal-footer">

    </div>
</div>
@endsection

@section('jquery')

    <script type="text/javascript">


 
$(document).ready(function() {
          $('#modal3').modal('open');
        
    });
    
    </script>
    @endsection