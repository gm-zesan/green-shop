<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'subject',
        'message',
        'read_status',
        'important_status'
    ];
}
