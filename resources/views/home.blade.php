@extends('layouts.basic')

@section('content')
    <div class="grid grid-cols-1 sm:grid-cols-2 space-y-1 sm:space-y-0 sm:space-x-2 p-4">
        <x-home.search-dropdown label="What" placeholder="Job title, keywords, or company" />
        <x-home.search-dropdown label="Where" placeholder="Federal state, city, or postal code" />
    </div>
    <div class="p-4">
        <livewire:jobboard />
    </div>
@endsection
