<?php

namespace App\Http\Livewire\Project\Attachment;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.project.attachment.index')
        ->extends('livewire.components.master', ['title' => 'Project Attachment'])
        ->section('contents');
    }
}
