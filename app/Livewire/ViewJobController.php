<?php

namespace App\Livewire;

use Livewire\Component;
use App\Services\Jobs;
use Illuminate\Support\Collection;

class ViewJobController extends Component
{
    public Collection $job;

    public function index($id)
    {
        $this->job = collect((new Jobs())->find($id));
        return view('livewire.view-job-controller', ['job' => $this->job]);
    }

    public function render()
    {
        return view('livewire.view-job-controller');
    }
}
