<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaga extends Model
{
    use HasFactory;

    protected $casts = [
        'data_exp' => 'datetime'
    ];

    public function empresa(){
        return $this->belongsTo(Empresa::class, 'cod_empresa');
    }

}
