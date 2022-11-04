<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    use HasFactory;

    public function chapter()
    {
        return $this->belogsTo(Chapter::class);
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
