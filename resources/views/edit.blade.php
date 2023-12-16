@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2>Edit Task</h2>
        </div>
        <div>
            <a href="{{route('tasks.index')}}" class="btn btn-primary">Back to Index</a>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger mt-4">
            <strong>Error updating the task</strong><br>Something was wrong!..<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('tasks.update', $task)}}" method="POST"> @csrf @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Task:</strong>
                    <input type="text" name="title" class="form-control" placeholder="Task" value={{$task->title}} >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Description:</strong>
                    <textarea class="form-control" style="height:150px" name="description" placeholder="Description..."> {{$task->description}} </textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong>Due Date:</strong>
                    <input type="date" name="due_date" class="form-control" id="" value={{$task->due_date}} >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong>Status (inicial):</strong>
                    <select name="status" class="form-select" id="">
                        <option value="">-- Pick the Status--</option>
                        <option value="Pending" @selected( "Pending" == $task->status )> Pending </option>
                        <option value="In progress..." @selected( "In progress..." == $task->status )> In progress...</option>
                        <option value="Completed" @selected( "Completed" == $task->status )> Completed </option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
</div>
@endsection