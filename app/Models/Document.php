<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Document extends Model
{
    use HasFactory;

    public function documentType()
    {
        return $this->belongsTo(DocumentType::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
