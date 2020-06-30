<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function paragraphs()
    {
        return $this->hasMany(Paragraphs::class);
    }

    public function businessCanvas()
    {
        return $this->hasOne(BusinessModelCanvas::class);
    }
}
