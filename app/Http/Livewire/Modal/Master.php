<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;

class Master extends Component
{
    public $data;
    public $show;

    protected $listeners = ['showModal' => 'showModal'];

    public function mount($data = null)
    {
        $this->data = $data;
        $this->show = false;
    }

    public function showModal($data) {
        $this->data = $data;
        $this->doShow();
    }

    public function doShow()
    {
        $this->show = true;
    }

    public function doClose()
    {
        $this->show = false;
    }

    public function doSomething()
    {
        $this->doClose();
    }

    public function render()
    {
        return view('livewire.modal.master');
    }
}
