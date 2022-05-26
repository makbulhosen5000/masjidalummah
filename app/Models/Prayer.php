<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prayer extends Model
{
    use HasFactory;
    protected $fillable = [
       'short_title','long_title','date','jummah','fajor','sunrise','dhuhr','asr','sunset','maghrib','ishaa',
    ];
}
