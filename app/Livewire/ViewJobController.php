<?php

namespace App\Livewire;

use Livewire\Component;
use App\Services\Jobs;

class ViewJobController extends Component
{
    public function index($id)
    {
      
        return view('livewire.view-job-controller');
    }

    public function render()
    {
        return view('livewire.view-job-controller');
    }
}
