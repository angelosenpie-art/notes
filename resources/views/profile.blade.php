@extends('layouts.main')

@section('content')
        <div  class="w-3/12 bg-white p-6 rounded-lg">
                <div class="mb-4">
                    <span class="flex item-center text">User Profile</span>
                </div>
                <div class="mb-4">
                    <span class="flex item-center">{{ auth()->user()->name }}</span>
                </div>
                <div class="mb-4">
                    <span class="flex item-center">{{ auth()->user()->username }}</span>
                </div>
                <div class="mb-4">
                    <span class="flex item-center">{{ auth()->user()->email }}</span>
                </div>
        </div>
@endsection