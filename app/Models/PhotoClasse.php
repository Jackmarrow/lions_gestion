<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoClasse extends Model
{
    use HasFactory;

    protected $fillable = [
        'photo',
        'classe_id'
    ];

    public function classe(){
        return $this->belongsTo(Classe::class);
    }
}
