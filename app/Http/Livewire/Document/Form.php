<?php

namespace App\Http\Livewire\Document;

use App\Models\Company;
use App\Models\Document;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Form extends Component
{
    public $document , $type ,$company;
    protected $rules = [
        'document.title' => 'required',
        'document.document_number' => 'required',
        'document.document_type_id' => 'required',
        'document.user_id' => 'required',
        
    ];
    protected $listeners = ['companySelected'];
    public function companySelected(Company $company)
    {
        $this->company = $company;
    }
    public function removeComapny()
    {
        $this->company = null;
    }
    public function mount()
    {
        if(!$this->document)
        {
            $this->document =new Document();
        }
        $this->document->document_type_id = $this->type->id;
        $this->document->user_id = Auth::id();
        

    }
    public function save()
    {
        $validate = $this->validate();
        $this->document->save();
        return redirect()->route('document.index',['type'=>$this->type->slug]);
    }
    public function render()
    {
        return view('livewire.document.form');
    }
}
