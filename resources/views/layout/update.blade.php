@extends('layout.main')
@push('head')
   <title>Edit Todo </title>
@endpush

@section('main-section')
<div class="container">
    <div class="d-flex justify-content-between align-items-center my-5">
        <div class="h2">Update Todo</div>
        <a href="{{ route("todolist.index") }}" class="btn btn-primary btn-lg">Back</a>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route("todolist.update", $item->id) }}" method="post">
                @csrf 
                @method('PUT')
                                
                @csrf

                <label for="" class="form-label mt-4" >Name</label>
                <input type="text" name="name" value="{{ $item->name }}" class="form-control">
                 <div class="text-danger" >
                    
                    @error('name')
                    {{ $message }}
                    @enderror

                 </div>
                <label for="" class="form-label mt-4">Work</label>
                <input type="text" name="work" value="{{ $item->work }}" class="form-control">
                <div class="text-danger" >
                   
                    @error('work')
                    {{ $message }}  
                    @enderror

                 </div>
                <label for="" class="form-label mt-4">Due Date</label>
                <input type="date" name="dueDate" value="{{ $item->due_date }}" class="form-control">
                <div class="text-danger" >
                    
                    @error('dueDate')
                    {{ $message }}
                        @enderror

                 </div>
                 <br>
                 <button type="submit" class="btn btn-success">Update</button>
                            </td>
                        </tr>     
                       
                    </table>
            </div>

    
</div>

@endsection