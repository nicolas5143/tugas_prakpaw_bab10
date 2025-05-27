@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Tugas</h1>
    <form action="{{ route('todos.update', $todo) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{ $todo->title }}" required>
        <textarea name="description">{{ $todo->description }}</textarea>
        <button type="submit">Update</button>
    </form>
</div>
@endsection
