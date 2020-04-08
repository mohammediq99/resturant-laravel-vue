@extends('layouts.app')

@section('content')
<div class="container">  
        <div class="row">
                <div class="col-md-12"> 
                <resto-group v-bind:restos=" {{ json_encode($restos) }}"></resto-group>
                </div>
        </div>

        
         
</div>
@endsection
