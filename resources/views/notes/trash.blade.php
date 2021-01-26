@extends('layouts.main')

@section('content')
<div class="bg-white shadow overflow-hidden sm:rounded-lg mt-20 w-2/3">
  <div class="px-4 py-5 sm:px-6">
    <h1 class="font-bold mb-5">TRASH NOTES</h1>
    <div class="row">
    @foreach ($notes as $note)
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card mb-1">
                <header class="card-header">
                    {{$note->title}}
                </header>
                <div class="card-body">
                    {{$note->description}}
                    @if ($note->schedule)
                    <br>
                    <b>Para:</b> {{$note->schedule->format('d/m/Y')}}
                    @endif
                    <div class="mt-2">
                        <a href="{{route('notes.trashRestore', $note)}}" class="btn btn-sm btn-primary">Restore Note</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>

    <div class="mt-2">
        <a class="btn btn-secondary" href="{{ route('notes.index') }}">Back to note list</a>
    </div>
  </div>
</div>
@endsection
