@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2 class="text-white">Task CRUD</h2>
            <h4>Here appear database-list</h4>
        </div>
        <div>
            <a href="{{route('tasks.create')}}" class="btn btn-primary">Create Task</a>
        </div>
    </div>

    @if (Session::get('success'))
        <div class="alert alert-success  mt-4">
            <strong>{{Session::get('success')}}</strong><br>
        </div>
    @endif

    <div class="col-12 mt-4">
        <table class="table table-bordered text-white">
            <tr class="text-secondary">
                <th>ID</th>
                <th>Task</th>
                <th>Description</th>
                <th>Due Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            @foreach ($tasks as $task)
            <tr>
                <td> {{ $task->id }} </td>
                <td class="fw-bold"> {{ $task->title }} </td>
                <td> {{ $task->description }} </td>
                <td> {{ $task->due_date }} </td>
                <td><span class="badge bg-warning fs-6"> {{ $task->status }} </span></td>
                <td>
                    <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning">Edit</a>

                    <form action="{{route('tasks.destroy', $task)}}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure???')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        {{$tasks->links()}}
    </div>
</div>
@endsection