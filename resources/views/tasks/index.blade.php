@extends('master')

@section('content')
<div class="container">
    <h1>Lista de TAreas</h1>
    <a href="{{url('/tasks/create')}}" class="btn btn-success">Crear Tarea</a>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr class="bg-info">
                <th>Id</th>
                <th>Descripción</th>
                <th>Creada</th>
                <th>Modificada</th>

                <th colspan="3">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
            <tr>
                <td>{{ $task->id }}</td>
                <td>{{ $task->description }}</td>
                <td>{{ $task->created_at }}</td>
                <td>{{ $task->updated_at }}</td>             
                <td><a href="{{url('tasks',$task->id)}}" class="btn btn-primary">Ver</a></td>
                <td><a href="{{route('tasks.edit',$task->id)}}" class="btn btn-warning">Actualizar</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['tasks.destroy', $task->id]]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach

        </tbody>

    </table>
</div>
@endsection