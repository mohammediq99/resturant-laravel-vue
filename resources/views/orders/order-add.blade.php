@extends('layouts.app')

@section('content')
<div class="container">  
        <div class="row">
                <div class="col-md-12"> 
                <order-group :resto="{{json_encode($resto)}}"></order-group>
                </div>
        </div>
 
         
</div>
@endsection
