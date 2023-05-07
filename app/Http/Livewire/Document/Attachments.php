<?php

namespace App\Http\Livewire\Document;

use App\Models\Document;
use Livewire\Component;
use Livewire\WithFileUploads;
class Attachments extends Component
{

    public $document ,$file;

    use WithFileUploads;

    public function save()
    {
        $this->validate([
            'file' => 'image|max:1024', // 1MB Max
        ]); 
        $filePath = $this->file->store('attachments' ,'public');
        // dd($filePath);
    }

    public function render()
    {
        return view('livewire.document.attachments');
    }
}
