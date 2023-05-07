<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Model extends Component
{
    public $component , $data = array();
    protected $listeners = ['openModel' ,'closeModel'];
    public function openModel($component , $params = "")
    {
        parse_str($params , $this->data);
        $this->component = $component;

    }
    public function closeModel()
    {
        $this->reset(['component','data']);
    }
    public function render()
    {
        return view('livewire.model');
    }
}
