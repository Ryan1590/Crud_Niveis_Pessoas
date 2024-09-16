<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desenvolvedores extends Model
{
    use HasFactory;
    protected $table = 'desenvolvedores';
    protected $fillable = ['nivel_id', 'nome', 'sexo', 'data_nascimento', 'hobby']; //esse carinha aqui é segurança do laravel/ precisa ter para poder inserir
    
    public function niveis ()
    {
        return $this->belongsTo(Niveis::class, 'nivel_id', 'id');
    }
}
