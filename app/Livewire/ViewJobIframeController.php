<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Collection;
use App\Services\Jobs;

class ViewJobIframeController extends Component
{
    public Collection $job;

    protected $listeners = ['lookUp'];

    public function lookUp(int $id)
    {
        $this->job = collect((new Jobs())->find($id));
        return view('livewire.view-job-controller', ['job' => $this->job]);
    }

    public function render()
    {
        return view('livewire.view-job-iframe-controller');
    }
}
