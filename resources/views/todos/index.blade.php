@extends('layouts.app')

@section('content')
<h1>Daftar Tugas</h1>

@if (session('success'))
    <div style="color:green;">{{ session('success') }}</div>
@endif

@if ($todos->isEmpty())
    <p>Belum ada tugas yang ditambahkan. Silahkan login/register untuk menambahkan tugas.</p>
@else
    <ul>
        @foreach ($todos as $todo)
            <li>
                <strong>{{ $todo->title }}</strong> - {{ $todo->description }}
                @auth
                    <a href="{{ route('todos.edit', $todo) }}">Edit</a>
                    <form action="{{ route('todos.destroy', $todo) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                @endauth
            </li>
        @endforeach
    </ul>
@endif

@auth
    <a href="{{ route('todos.create') }}">Tambah Tugas</a>
@endauth
@endsection
