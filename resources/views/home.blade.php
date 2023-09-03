@extends('layouts.basic')

@section('content')
    <div class="flex flex-col space-y-1 p-4">
        <x-home.search-dropdown label="Was" placeholder="Jobtitel, Stichworte oder Unternehmen" />
        <x-home.search-dropdown label="Wo" placeholder="Bundesland, Stadt oder Postleitzahl" />
    </div>
    <div class="p-4">
        <livewire:jobboard />
    </div>
@endsection
