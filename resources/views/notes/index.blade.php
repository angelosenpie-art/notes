@extends('layouts.main')

@section('content')
<div class="bg-white self-center  shadow overflow-hidden sm:rounded-lg mt-20 w-2/3">
  <div class="px-4 py-5 sm:px-6">
    <div class="row">
    @foreach ($notes as $note)
        <div class="col-12 col-md-6 relative col-lg-4">
          <div class="card mb-1">
              <header class="card-header">
                <div class="flex">
                  <h3 class="font-bold pr-2">TITLE:</h3><h3 name="title" id="title">{{$note->title}}</h3>
                  @error('title')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                  @enderror
                </div>
              </header>
              <div class="card-body">
                <div class="flex">
                    <h3 class="font-bold pr-2">DESCRIPTION:</h3><h3 name="des">{{$note->description}}</h3>
                  @error('des')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                  @enderror
                </div>
                @if ($note->schedule)
                <br><br>
                  <div>
                    <b class="pr-2">SCHEDULE:</b> {{$note->schedule->format('d/m/Y')}}
                  </div>
                @endif
              </div>
            <div class="mt-2 absolute pr-2 pb-2 bottom-0 right-0 ">
              <form action="{{ route('notes.destroy', $note) }}" class="d-inline" method="POST">
                  @csrf
                  @method('delete')
                  <button href="" class="btn btn-sm btn-danger">Delete</button>
              </form>
              <a href="{{ route('notes.edit', $note) }}" class="btn btn-sm btn-primary">Edit Note</a>
            </div>
          </div>
        </div>
    @endforeach
    </div>
    <div class="mt-2 flex justify-between">
        <div>
          <a class="btn bg-green-500 text-white" href="{{ route('notes.create') }}">Add</a>
          <a class="btn bg-gray-500 text-white" href="{{ route('notes.trash') }}">Trash List</a>
        </div>
        <div class="pr-5">
          @if (!$notes->onFirstPage())
          <a class="btn btn-sm btn-light" href="{{ $notes->previousPageUrl() }}">Previous</a>
          <a class="btn btn-sm btn-light" href="{{ $notes->url($notes->currentPage() - 1) }}">{{$notes->currentPage() - 1}}</a>
          @endif
          <a class="btn btn-sm btn-primary">{{$notes->currentPage()}}</a>
          @if ($notes->hasMorePages())
          <a class="btn btn-sm btn-light" href="{{ $notes->url($notes->currentPage() + 1) }}">{{$notes->currentPage() + 1}}</a>
          <a class="btn btn-sm btn-light" href="{{ $notes->nextPageUrl() }}">Next</a>
          @endif
        </div>
    </div>
  </div>
</div>
@endsection
