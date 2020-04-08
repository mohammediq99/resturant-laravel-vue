@extends('layouts.app')

@section('content')
<div class="container">  
        <div class="row">
                <div class="col-md-12"> 
                <h2>
Manage Orders From {{$resto->name }}
</h2>
                </div>
        </div>

        <div class="row">
                <div class="col-md-12"> 
                <table class="table table-hover table-bordered table-striped">
                <thead>
                <tr>
                <th>Order Id</th>
                <th>Amount</th>
                <th>status</th>
                <th>Custmer Info</th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
                <tr>
                <td>{{$order->id}}</td>
                <td>{{$order->amount}}</td>
                <td>{{($order->isComplete) ? 'Complted' : 'Not Completed'}}</td>
                <td>
                Name : {{$order['order_details']['customer_name']}} <br>
                Phone : {{$order['order_details']['customer_phone']}} <br>
                Address : {{$order['order_details']['customer_address']}} <br>
                </td>

                </tr>
                @endforeach
                </tbody>
                
                
                
                </table>

{{ $orders->render() }}


                </div>
        </div> 
         
</div>
@endsection
