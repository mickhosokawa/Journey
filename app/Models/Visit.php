<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Visit extends Model
{
    use HasFactory;

    protected $fillable = [
        'place',
        'address',
        'date',
        'transportation',
        'comment',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
