@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1> Editar Tag</h1>
@stop

@section('content')

<div class="card">
    <div class="card-header">
        <a href="{{ route('tags.index') }}" class="btn btn-primary"> Volver al Listado</a>
    </div>
    <div class="card-body">
        
        <form class="form" action="{{ route('tags.update',$tag) }}" method="post">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="name">Tag</label>
                <input type="text" name="name" value="{{ old('name',$tag->name) }}" class="form-control @error('name') is-invalid @enderror" >
                @error('name')
                    <p class="text-danger">{{ $message}}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-success">Actualizar</button>
        </form>
    </div>
    
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop