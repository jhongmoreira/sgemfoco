<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classificados extends Model
{
    use HasFactory;

    protected $casts = [
        'items' => 'array',
        'date' => 'datetime'
    ];

    protected $dates = ['date'];
    
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }


}
