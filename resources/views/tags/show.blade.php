@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Tag - {{ $tag->name }}</h1>
@stop

@section('content')

<div class="card">
    <div class="card-header">
        
        <div class="btn-group">
            <a class="btn btn-warning" href="{{ route('tags.edit',$tag)}}">Editar</a>
        <form action="">
            <a class="btn btn-danger" href="{{ route('tags.destroy',$tag)}}">Eliminar</a>
        </form>
        </div>
    </div>
    <div class="card-body">
        <p>{{ $tag->id }}</p>
        <p>{{$tag->name}}</p>
        <p>{{$tag->created_at}}</p>
        <p>{{$tag->updated_at}}</p>
    </div>
    <div class="card-footer">
        <a href="{{ route('tags.index') }}"> Volver a Lista</a>
    </div>
    
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop