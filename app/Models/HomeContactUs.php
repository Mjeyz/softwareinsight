<?php

namespace App\Models;

use App\Mail\ContactMail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class HomeContactUs extends Model
{
    use HasFactory;
    public $fillable = ['name', 'company_name', 'phone', 'email', 'message'];
}
