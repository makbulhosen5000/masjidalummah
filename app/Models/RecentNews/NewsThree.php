<?php

namespace App\Models\RecentNews;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsThree extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'date',
        'title',
        'short_desc',
        'long_desc',
     ];
}
