<?php

namespace App\Models\Services;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceOne extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'title',
        'short_desc',
        'long_desc',
     ];
}
