<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contracts extends Model
{
    use HasFactory;

    protected $fillable = [
        'employer', 'contract_subject', 'beginning', 'deadline', 'number', 'status', 'code'
    ];
}
