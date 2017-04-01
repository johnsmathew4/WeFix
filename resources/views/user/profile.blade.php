@extends('layouts.app')

@section('css')

    <style type="text/css">
    .tooltip-inner {

height:80px;
        background-color: #204d74;
        padding-top: 32px;
    width: 950px;
    }
    </style>

@endsection

@section('content')


<div class="container">

Name :{{$us->name}}
    <br>
Email :{{$us->email}}
<br>
 Rating: {{$us->rating}}
<br>
<br>
<p></p>

    modal on clicling this button
<button type="button" class=" btn btn-primary">Book</button>
    <br>
    <br>
    <br>
    <br>
   Pay 100rs for booking

    <form method="POST" action="{{ route('user.pay',['id' => $us->id])  }}">


        {{ csrf_field() }}





        <button type="submit" class=" col-sm-offset-1 btn btn-primary">Pay</button>
    </form>



<br>
<p></p>




<form method="POST" action="{{ $edit ? route('user.feed.edit',['id' => $us->id]) : route('user.feeding',['id' => $us->id]) }}">
    <div  @if(!$booked) data-toggle="tooltip" data-placement="top" title="BOOK A WORKER TO RATE" title="BOOK A WORKER TO RATE" @endif >
    <div class="form-group">
        {!! $edit ? '<input type="hidden" name="_method" value="PATCH">' : " " !!}
        {{ csrf_field() }}
    <div class="form-group">
        <label for="exampleSelect1">Rating</label>
        <select class="form-control" id="rating" name="rating"    @if(!$booked) disabled @endif >
            @for($i=1;$i<=5;$i++)
            <option @if($edit) @if($i==$feed->rating) {{'selected="selected"'}} @endif @endif value="{{$i}}">{{$i}}</option>
           @endfor
        </select>
    </div>

    <div class="form-group">
        <label for="exampleTextarea">Feedback</label>
        <textarea class="form-control" id="feed" rows="3"  name="feed"  @if(!$booked) disabled @endif > {{$edit ? $feed->feedback : ""}}</textarea>
    </div>


    </div>


        @if(!$booked) <button   class="col-sm-2 btn  btn-danger"  data-toggle="popover" data-trigger="focus" title="WARNING!!"
                                data-content="Book Worker to  Rate">Post Feed</button> @endif



        @if($booked) <button type="submit" class="col-sm-2 btn btn-primary"   >{{$edit ? "Edit Feed" : "Post Feed"}}</button>
    </div> @endif
</form>

    @if($edit)
        <form method="POST" action="{{ route('user.feed.delete',['id' => $us->id])  }}">

            {!! $edit ? '<input type="hidden" name="_method" value="DELETE">' : " " !!}
            {{ csrf_field() }}





            <button type="submit" class=" col-sm-offset-1 btn btn-danger">Discard Feed</button>
        </form>

    @endif






    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Feedback</th>
            <th>Rating</th>


        </tr>
        </thead>
        <tbody>
        @php
        $i=1;
        @endphp

        @foreach($feeding as $f)


            <th scope="row">{{$i++}}</th>




            <td>   {{$f->feedback}}  </td>
            <td>  {{$f->rating}} </td>
            <td>{{$f->updated_at->diffForHumans() }} </td>


            </tr>
        @endforeach

        </tbody>
    </table>







</div>











@endsection


@section('jquery')

    <script type="text/javascript">

    $(function () {
    $('[data-toggle="tooltip"]').tooltip()

    })
    $(function () {
    $('[data-toggle="popover"]').popover()
    })

    $('#example').popover(options)
    </script>
    @endsection