<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GphContracts extends Model
{
    use HasFactory;

    protected $fillable = [
        'code', 'surname', 'name', 'patronymic',  'contract_subject', 'number', 'beginning', 'status'
    ];
}
