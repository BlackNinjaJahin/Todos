@extends('layouts.main')
@push('head')
    <!-- Page title -->
<title>To Do List App</title>
@endpush

@section('main-section')
    <!-- Main section -->
<div class="container">
    <!-- Container -->
  <div class="d-flex justify-content-between align-items-center my-5">
    <!-- Container header -->
    <div class="h2">All To Do</div>
    <a href="{{ route('todo.create') }}" class="btn btn-primary">Add To Do</a>
  </div>
  <!-- Container header -->
  
  <table class="table table-striped table-dark">
    <thead>
      <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <!-- Loop through todos -->
      @foreach ($todos as $todo)
      <tr class="{{ $todo->completed ? 'completed' : '' }}">
        <td>{{ $todo->name}}</td>
        <td>{{ $todo->work}}</td>
        <td>{{ $todo->due_date }}</td>
        <td>
          <a href="{{ route('todo.edit', $todo->id) }}" class="btn btn-success btn-sm">Update</a>
          <!-- Delete form -->
          <form action="{{ route('todo.delete', $todo->id) }}" method="POST" style="display:inline;">
            @csrf
            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
          </form>
          <!-- Complete form -->
          <form action="{{ route('todo.complete', $todo->id) }}" method="POST" style="display:inline;">
            @csrf
            <button type="submit" class="btn btn-secondary btn-sm">{{ $todo->completed ? 'Undo' : 'Complete' }}</button>
          </form>
        </td>
      </tr>
      @endforeach
      <!-- Loop through todos -->
    </tbody>
  </table>
</div>
<!-- Container -->

<style>
    /* CSS styles */
.completed td {
  text-decoration: line-through;
}
</style>
@endsection

