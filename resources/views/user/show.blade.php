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
                            @foreach($user as $us)
                            <tr>
                                <th scope="row">1</th>
                                <td>{{$us->name}}</td>
                                <td>{{$us->email}}</td>
                                <td>{{$us->rating}}</td>
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
