@extends('layouts.app')

@section('content')
<div class="container">  
        <div class="row">
                <div class="col-md-12">
                    <menu-container v-bind:items="{{ json_encode($menus) }}" v-bind:resto="{{ $restoId }}">
                    </menu-container>
                    </div>
        </div>
</div>
@endsection