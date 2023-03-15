<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Visit;

class Memory extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'detail',
    ];

    public function visit(){
        return $this->belongsTo(Visit::class);
    }
}
