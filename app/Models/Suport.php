<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suport extends Model
{
    use HasFactory;
    protected $fillable=[
        'objectivo',
        'status',
        'informacoes'
    ];
}
