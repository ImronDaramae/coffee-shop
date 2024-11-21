<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contacts';

    protected $fillable = ['name', 'slug', 'phone', 'address', 'url', 'status'];

    protected $casts = [
        'status' => 'boolean',
    ];
}
