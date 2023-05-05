<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invoice extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_id',
        'user_id',
        'invoice_number',
    ];

     public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
