<?php

namespace App\Http\Livewire\Project;

use Livewire\Component;

class Create extends Component
{
    public function render()
    {
        return view('livewire.project.create')
        ->extends('livewire.components.master', ['title' => 'Project - Create'])
        ->section('contents');
    }
}
