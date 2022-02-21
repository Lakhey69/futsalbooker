<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Futsal extends Model
{
    use HasFactory;
    public $table="futsals";
    protected $fillable = [
        "futsal_name",
        "owner_name",
        "contact",
        "email",
        "city",
        "area",
        "image",
        "status"
    ];
}
