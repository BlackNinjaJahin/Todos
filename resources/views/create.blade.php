@extends('layouts.main')
@push('head')
<!-- This is the view for creating new todo items -->
<title>Add To do</title>
@endpush
@section('main-section')

<div class="container">
    <!-- Container -->
  <div class="d-flex  justify-content-between  align-items-center my-5">
    <!-- Container header -->
    <div class="h2">Add To Do</div>
    <a href="{{route("todo.home")}}"class ="btn btn-primary btn-lg">Back</a>
    <!-- Back button -->
  </div>
    <!-- Container header -->
  <div class="card-body">

    <form action="{{route("todo.store")}}" method="post">
    @csrf
        <!-- Name -->
        <label for ="" class="form-label mt-2">Title</label>
        <input type="text" name="name" class="form-control"">
          <span class="text-danger">
            @error('name')
            {{$message}}
            @enderror
          </span>    
        <!-- Work -->
        <label for ="" class="form-label mt-2">Description</label>
        <input type="text" name="work" class="form-control" >
        <span class="text-danger">
            @error('work')
            {{$message}}
            @enderror
        <!-- Due Date -->
        <label for ="" class="form-label mt-2 text-black">Status</label> 
        <input type="date" name="dueDate" class="form-control" >
        <span class="text-danger">
            @error('dueDate')
            {{$message}}
            @enderror
       
        <!-- Add todo button -->
        <button class="btn btn-primary btn-lg mt-2">Add Todo</button>
    </form>
  </div>
</div>
@endsection
