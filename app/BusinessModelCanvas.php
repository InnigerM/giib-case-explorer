<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessModelCanvas extends Model
{
    public function article()
    {
        return $this->belongsTo(Post::class);
    }
}
