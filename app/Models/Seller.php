<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'username',
        'address',
        'number',
        'date_of_birth',
    ];

    public function store()
    {
        return $this->hasOne(Store::class);
    }
}
