@extends('layouts.app')


@section('content')
<div class="container">

    <table class="hoverable highlight" >
        <h4 align="center" >InActive Workers</h4>

        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Location</th>
            <th>Profession</th>
            <th>Mobile No</th>
        </tr>
        </thead>

        <tbody>
        <tr>
            @foreach($user as $us)
            <td>{{$us->name}}</td>
                <td>{{$us->email}}</td>
                <td>{{$us->location->location}}</td>

                <td>{{$us->profession->name}}</td>
                <td>{{$us->number}}</td>

                <form method="POST"  action="{{route('admin.wefixer.active',['id'=>$us->id])}}">


                    {{csrf_field()}}


                    <td>  <button type="submit"  class="waves-effect waves-light btn teal"><i class="material-icons left">library_add</i>Active </button> </td>


                </form>






                <form method="POST"  action="{{route('admin.wefixer.delete',['id'=>$us->id])}}">

                    <input type="hidden" name="_method" value="DELETE">
                    {{csrf_field()}}


                    <td>  <button type="submit"   class="waves-effect waves-light btn red"><i class="material-icons left">delete</i>Delete</button> </td>


                </form>





        </tr>

        @endforeach
        </tbody>
    </table>


    <ul class="pagination">
        <li class="disabled"><a href="{{$user->previousPageUrl()}}"><i class="material-icons">chevron_left</i></a></li>
        @for($i=1;$i<=$user->total()/4;$i++)
            <li class="@if($i==$user->currentPage()) active @endif "><a href="{{$user->url($i)}}">{{$i}}</a></li>

        @endfor
        <li class="waves-effect"><a href="{{$user->nextPageUrl()}}"><i class="material-icons">chevron_right</i></a></li>

    </ul>
</div>
@endsection

@section('jquery')

    <script type="text/javascript">






    </script>
@endsection