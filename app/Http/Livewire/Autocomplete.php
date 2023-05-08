<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Autocomplete extends Component
{
    public $query , $model , $event ,$createComponent ,$items=array();
    public $results = array() ;
    public function updatedQuery()
    {
        // dd('test');
        if ($this->query !='') {
        $this->results = DB::table('companies')->where('name','like','%'.$this->query.'%')->limit(6)->get();
        }else {
            $this->results= [] ;
        }
        // dd($this->results);
        if ($this->query !='') {
            $this->items = DB::table('items')->where('name','like','%'.$this->query.'%')->limit(6)->get();
            }else {
                $this->items= [] ;
            }
    }
    public function select($rowId)
    {
        $this->emitUp($this->event , $rowId);
        $this->reset('results');
    }
    public function render()
    {
        return view('livewire.autocomplete');
    }
}
