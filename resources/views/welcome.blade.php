@extends('layout.main')
@push('head')
   <title>Todo List App </title>
@endpush

@section('main-section')
<div class="container">
    <div class="d-flex justify-content-between align-items-center my-5">
        <div class="'h2" style="text-align: center" > All Todo </div>
        <a href="{{ route("create") }}" class="btn btn-primary btn-lg">Add Todos</a>
    </div>
     
        <table class="table table-stripped table-dark">
            <tr>
                <th>Name</th>
                <th>Work</th>
                <th>Due Date</th>
                <th>Action</th>
            </tr>
            @foreach ($items as $item)
           
            <tr valign='middle'> 
                <td>{{ $item->name }}</td>
                <td>{{ $item->work }}</td>
                <td>{{ $item->due_date }}</td>

                    <td><a href="{{ route("todolist.edit", $item) }}" class="btn btn-success">Edit</a><td>
                        <form action="{{ route("todolist.destroy",$item->id) }}" method="post">@METHOD("delete") @csrf
                        <button type="submit" class="btn btn-danger">Delete</button></form>
                    </td>
                </tr>     
                @endforeach
            </table>
    </div>
@endsection