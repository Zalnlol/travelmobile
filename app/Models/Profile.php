<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    // use HasFactory;
    protected $guarded = [];
    public function avatar_image(){
        $imagePath = ($this->image) ? $this->image : 'img/default-user-icon.jpg';
        return '/storage'.$imagePath;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
