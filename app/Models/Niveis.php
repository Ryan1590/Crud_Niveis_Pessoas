<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Niveis extends Model
{
    use HasFactory;
    protected $fillable = ['niveis'];

    public function desenvolvedores()
    {
        return $this->hasMany(Desenvolvedores::class, 'nivel_id');
    }
}
