<?php

namespace App\Models\RecentNews;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsTwo extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'short_desc',
        'long_desc',
        'date',
     ];
}
