<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;

class Master extends Component
{
    public $data;
    public $show;

    public $modalTitle;
    public $modalSubTitle;
    public $modalContent;

    protected $listeners = [
        'showModal' => 'showModal',
    ];

    public function mount()
    {
        $this->show = false;
    }

    public function showModal() {
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
