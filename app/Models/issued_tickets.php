<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class issued_tickets extends Model
{
    use HasFactory;

    protected $table = 'issued_tickets';
    protected $guarded = [];
}
