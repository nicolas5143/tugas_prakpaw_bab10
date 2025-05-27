@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Tugas</h1>
    <form action="{{ route('todos.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Judul" required>
        <textarea name="description" placeholder="Deskripsi"></textarea>
        <button type="submit">Simpan</button>
    </form>
</div>
@endsection
