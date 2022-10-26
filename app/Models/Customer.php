<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email'];

    // One to one relationship with Car Model
    public function car()
    {
        return $this->hasOne(Car::class, 'customer_id', 'id');
    }
}
