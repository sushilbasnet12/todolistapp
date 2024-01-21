@extends('layout.main')
@push('head')
   <title>Todo List App </title>
@endpush

@section('main-section')
<div class="container">
    <div class="d-flex justify-content-between align-items-center my-5">
        <div class="'h2">All Todo</div>
        <a href="{{ route("create") }}" class="btn btn-primary btn-lg">Add Todos</a>
    </div>

        <table class="table table-stripped table-dark">
            <tr>
                <th>Name</th>
                <th>Work</th>
                <th>Due Date</th>
                <th>Action</th>
            </tr>
            <tr valign='middle'> 
                <td>Name</td>
                <td>Work</td>
                <td>Due Date</td>
                <td>
                    <a href="" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        </table>

    
</div>

@endsection