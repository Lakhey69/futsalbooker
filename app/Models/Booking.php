<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    public $table="booking";
    protected $fillable = [
        "user_id",
        "futsal_id",
        "futsal_name",
        "booker_name",
        "booker_contact",
        "area",
        "price"
    ];
}
