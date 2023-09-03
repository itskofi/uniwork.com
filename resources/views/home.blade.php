@extends('layouts.basic')

@section('content')
    <div class="flex flex-col space-y-1 p-4">
        <x-home.search-dropdown label="What" placeholder="Job title, keywords, or company" />
        <x-home.search-dropdown label="Where" placeholder="Federal state, city, or postal code" />
    </div>
    <div class="p-4">
        <livewire:jobboard />
    </div>
@endsection
