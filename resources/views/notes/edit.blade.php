@extends('layouts.main')

@section('content')
<div class="container mt-5">
    <h1 class="mb-5 text-xl"><b>EDIT NOTE</h1>
    <form action="{{ route('notes.update', $note) }}" method="POST" class="form">
        @csrf

        @method('PUT')
        @include('notes.form', ["note" => $note])
        <button class="btn btn-success">Edit</button>
    </form>
    <hr>
    <a class="btn btn-secondary" href="{{ route('notes.index') }}">Back</a>
</div>
@endsection
