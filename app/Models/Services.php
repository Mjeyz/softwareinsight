<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;
    protected $fillable = ['slug', 'banner_heading', 'banner_paragraph', 'main_content_heading', 'main_content_paragraph', 'services_main_content', 'user_id'];
    public function getRouteKeyName(){
        return 'slug';
    }
}
