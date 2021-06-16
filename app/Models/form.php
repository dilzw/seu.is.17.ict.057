<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class form extends Model
{
    use HasFactory;

    public $fillable = [
        'Name'
        'Username'
        'Date of Birth'
        'Email'
        'Telephone No'
        'NIC No'
        'Gender'
        'Password'
        'Reenter Password'
    ];
}
