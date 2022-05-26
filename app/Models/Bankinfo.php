<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bankinfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'acccount_name',
        'account_no',
        'transaction_no',
        'transaction_date',
        'amount',
        'message',
     ];
}
