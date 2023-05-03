<?php

namespace App\Http\Livewire\Company;

use App\Models\Company;
use Livewire\Component;

class Form extends Component
{
    public $company;
    protected $rules = [
        'company.name' => 'required|min:6',
        'company.email' => 'required|email',
        'company.mobile'=> 'required|min:11',
    ];
    public function mount()
    {
        if(!$this->company)
        {
            $this->company =new Company();
        }

    }
    public function save()
    {
        $validate = $this->validate();
        $this->company->save();
        return redirect()->route('company.index');
    }

    public function render()
    {
        return view('livewire.company.form');
    }
}
