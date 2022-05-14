<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colaborators extends Model
{
    use HasFactory;
    public $timestamps = false;
    
    protected $fillable = [
       'surname', 'name', 'patronymic', 'department', 'position', 'contract', 'address', 'telefone', 'characteristic'
    ];
}
