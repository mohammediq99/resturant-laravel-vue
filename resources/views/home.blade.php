@extends('layouts.app')

@section('content')
<div class="container">  

                    <menu-container v-bind:items="{{ json_encode($menus) }}" v-bind:resto="{{ $restoId }}">
                    </menu-container>
            
         
</div>
@endsection
