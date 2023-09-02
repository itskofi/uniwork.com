<?php

namespace App\Livewire;

use Livewire\Component;
use App\Services\Jobs;
use Illuminate\Support\Collection;

class Jobboard extends Component
{
    public Collection $jobs;

    public function mount()
    {
        $this->jobs = collect((new Jobs())->get());
    }

    public function render()
    {
        return view('livewire.jobboard');
    }
}
