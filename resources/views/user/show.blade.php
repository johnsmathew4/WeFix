@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">WiFixers</div>

                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Mail</th>
                                <th>Rating</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                            $i=1;
                            @endphp

                            @foreach($user as $us)

                                <th scope="row">{{$i++}}</th>




                                <td>  <a style="display: block ;text-decoration: none" href="profile/{{$us->id}}"> {{$us->name}}  </a></td>
                                <td><a style="display: block;text-decoration: none " href="profile/{{$us->id}}">  {{$us->email}} </a></td>
                                <td><a style="display: block ;text-decoration: none" href="profile/{{$us->id}}"> {{$us->rating}} </a></td>


                                </tr>
                            @endforeach

                            </tbody>
                        </table>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
