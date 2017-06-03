@extends('layouts.app')


@section('css')

    <style>


        body
        {

            background-color: #fbfbfb;
        }

    </style>

    @endsection
@section('content')



<div class="row "  style="margin-left:30px; margin-right:30px;">


        @php
        $i=1;
        @endphp
        @foreach($orders as $order)

        <div class="col s12 m12 l6" style="">
        <div class="card horizontal hoverable z-depth-2 ">

                <img width="50px" height="50px" src="{{asset('images/avatar.png')}}"  alt="" class="circle">

            <div class="card-stacked">

                    <h5><a style="display: block ;text-decoration: none"  href="{{route('user.profile',['id'=> $order->worker->id])}} "> {{$i++}}.  {{$order->worker->name}}</a></h5>
                 {{$order->worker->profession->name}}
                    <h5> {{  $order->time->format('d F Y ')}}</h5>
                    Booked :{{$order->created_at->diffForHumans() }}
                    @if($order->finish==1) <br>
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






            </div>
        </div>
        </div>

                    @endforeach


</div>









@endsection


@section('jquery')

    <script>
    @if (session('status'))
        Materialize.toast('Order Successfully', 4000);

    @endif
    </script>
    @endsection