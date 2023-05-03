<?php

namespace App\Http\Livewire\Item;

use App\Models\Item;
use Livewire\Component;

class Form extends Component
{
    public $item;
    protected $rules = [
        'item.name' => 'required',
        'item.description' => 'required',
        'item.hsn_code'=>'nullable',
        'item.sav_code'=>'nullable',
        'item.price'=>'numeric',
        'item.tax'=>'numeric' ,
    ];
    public function mount()
    {
        if(!$this->item)
        {
            $this->item =new Item();
        }

    }
    public function save()
    {
        $validate = $this->validate();
        $this->item->save();
        return redirect()->route('item.index');
    }
    public function render()
    {
        return view('livewire.item.form');
    }
}
