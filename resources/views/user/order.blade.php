@extends('layouts.app')

@section('content')

    @if (session('status'))
        <div class="row" style="width: 60%">
            <div class="col s12 m5">
                <div class="card-panel green lighten-5 "style="color: #a5d6a7;font-weight: bold;text-align:center;">

                    <div class="alert alert-success"><i class="medium material-icons">done</i>
                        {{ session('status') }}


                    </div>
                </div>
            </div>
        </div>
    @endif










    <ul class="collection" style="width: 70%;margin: 0 auto;">
        <h4 style="text-align: center;">Orders</h4>
        <li class="collection-item avatar">

            @php
            $i=1;
            @endphp
            @foreach($orders as $order)


                <img  src="{{asset('images/avatar.png')}}"  alt="" class="circle">

                <a style="display: block ;text-decoration: none"  href="{{route('user.profile',['id'=> $order->worker->id])}} "> {{$i++}}.  {{$order->worker->name}}</a>
                {{$order->worker->profession->name}}<br>
             <h5> {{  $order->time->format('d F Y ')}}</h5><br>
                Booked :{{$order->created_at->diffForHumans() }}
               @if($order->finish==1)
                   <br>




                   Finished:{{$order->updated_at->diffForHumans() }}
                @else

                   @if($order->accept==1)
                    <form method="POST" action="{{ route('finish',['id' => $order->id])}}">
                        {{ csrf_field() }}
                        <button type="submit" style="margin-right:300px;background-color: #e40046;color: white;" class="modal-action modal-close btn waves-light waves-effect">Finished</button>
                    </form>
                      @elseif($order->accept==2)
                       <h6 style="color: #ff000e">Work Rejected</h6>
                       @else
                        <h6 style="color: #54ff33">Pending</h6>
                       @endif

                @endif


                <hr>


            @endforeach

        </li>

    </ul>










@endsection
