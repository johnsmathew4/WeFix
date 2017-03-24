@extends('layouts.app')

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

<button type="button" class=" btn btn-primary">Book</button>
<br>
<p></p>




<form method="POST" action="{{ $edit ? route('user.feed.edit',['id' => $us->id]) : route('user.feeding',['id' => $us->id]) }}">
    <div class="form-group">
        {!! $edit ? '<input type="hidden" name="_method" value="PATCH">' : " " !!}
        {{ csrf_field() }}
    <div class="form-group">
        <label for="exampleSelect1">Rating</label>
        <select class="form-control" id="rating" name="rating">
            @for($i=1;$i<=5;$i++)
            <option @if($edit) @if($i==$feed->rating) {{'selected="selected"'}} @endif @endif value="{{$i}}">{{$i}}</option>
           @endfor
        </select>
    </div>

    <div class="form-group">
        <label for="exampleTextarea">Feedback</label>
        <textarea class="form-control" id="feed" rows="3"  name="feed"> {{$edit ? $feed->feedback : ""}}</textarea>
    </div>



    </div>


    <button type="submit" class="col-sm-2 btn btn-primary">{{$edit ? "Edit Feed" : "Post Feed"}}</button>
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
