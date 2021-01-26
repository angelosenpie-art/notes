@extends('layouts.main')

@section('content')
<div class="container mt-5">
    <form action="{{ route('notes.store') }}" method="POST" class="form">
        @csrf
        @include('notes.form')
        <button class="btn btn-success">Add</button>
    </form>
    <hr>
    <a class="btn btn-secondary" href="{{ route('notes.index') }}">Trash Notes</a>
</div>
@endsection
