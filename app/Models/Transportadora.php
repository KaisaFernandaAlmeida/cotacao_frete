<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Route;

class Transportadora extends Model
{
    use HasFactory;

    protected $fillable = ['nome'];
}
