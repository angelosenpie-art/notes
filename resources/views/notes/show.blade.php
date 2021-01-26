@extends('layouts.main')

@section('content')
<div class="bg-white shadow overflow-hidden sm:rounded-lg mt-20 w-2/3">
  <div class="px-4 py-5 sm:px-6">
    <hr>
    <div>
      <div class="flex">
        <h1 class="font-bold text-xl pr-3">TITLE:</h1> <h3 class="text-xl">{{$note->title}}</h3>
      </div>
      <div class="mt-3 flex">
        <h1 class="font-bold text-xl pr-3">DESCRIPTION:</h1> <h3 class="text-xl">{{$note->description}}</h3>
      </div>
        @if ($note->schedule)
        <div class="flex mt-3">
          <h1 class="font-bold text-xl pr-3">SCHEDULE:</h1> <h1 class="text-xl">{{$note->schedule->format('d/m/Y')}}</h1>
        </div>
        @endif
        <div class="mt-5">
            <a href="{{ route('notes.edit', $note) }}" class="btn btn-sm btn-primary">Edit</a>
            <form action="{{ route('notes.destroy', $note) }}" class="d-inline" method="POST">
                @csrf
                @method('delete')
                <button href="" class="btn btn-sm btn-danger">Delete</button>
            </form>
            <a class="btn btn-sm btn-secondary" href="{{ route('notes.index') }}">Back</a>
        </div>
    </div>
    <hr>
</div>
@endsection
