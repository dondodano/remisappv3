<?php

namespace App\Http\Livewire\Project;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.project.index')
        ->extends('livewire.components.master', ['title' => 'REMIS - Project'])
        ->section('contents');
    }
}
