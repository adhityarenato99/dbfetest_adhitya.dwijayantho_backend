<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    // protected $table = 'Transactions';

    protected $fillable = [
        'Company_ID', 'Description', 'Purpose', 'Amount'
    ];
}
