<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paragraphs extends Model
{
    public function article()
    {
        return $this->belongsTo(Post::class);
    }
}
