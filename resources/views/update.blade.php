@extends('layouts.main')

@push('head')
<!-- This is the update view for updating todo items. -->
<title>Update To Do</title>
@endpush

@section('main-section')
<div class="container">
  <div class="d-flex justify-content-between align-items-center my-5">
    <div class="h2">Update To Do</div>
    <a href="{{ route('todo.home') }}" class="btn btn-primary btn-lg">Back</a>
  </div>
  <div class="card-body">
    <form action="{{ route('todo.update') }}" method="post">
      @csrf
      <!-- Hidden input for the id -->
      <input type="hidden" name="id" value="{{ $todo->id }}">
      <!-- Input for the name of the todo -->
      <label for="name" class="form-label mt-2">Title</label>
      <input type="text" name="name" id="name" class="form-control" value="{{ $todo->title }}" required>
      <!-- Text area for the work of the todo -->
      <label for="work" class="form-label mt-2">Description</label>
      <textarea name="work" id="work" class="form-control" required>{{ $todo->description }}</textarea>
      <!-- Input for the due date of the todo -->
      <label for="due_date" class="form-label mt-2">Status</label>
      <input type="date" name="dueDate" id="due_date" class="form-control" value="{{ $todo->due_date }}" required>
      <!-- Submit button for the form -->
      <button type="submit" class="btn btn-primary btn-lg mt-2">Update Todo</button>
    </form>
  </div>
</div>
@endsection

