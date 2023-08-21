<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListJob extends Model
{
    use HasFactory;
    protected $fillable = [
        'Id',
        'name',
        'is_active',
    ];
}
