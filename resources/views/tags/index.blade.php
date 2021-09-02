@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Tag</h1>
@stop

@section('content')

<div class="card">
    <div class="card-header">
        <a href="{{ route('tags.create') }}" class="btn btn-info"> Nuevo Tag</a>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Fecha Creacion</th>
                    <th>Fecha Modificada</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tags as $tag)
                    <tr>
                        <td>{{ $tag->id}}</td>
                        <td><a href="{{route('tags.show',$tag)}}">{{ $tag->name}}</a></td>
                        <td>{{ $tag->created_at }}</td>
                        <td>{{ $tag->updated_at }}</td>
                        <td width="10px">
                            <a href="{{ route('tags.edit',$tag)}}" class="btn btn-sm btn-warning">Editar</a>
                        </td>
                        <td width="10px">
                            <form action="{{ route('tags.destroy',$tag)}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                            </form>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop