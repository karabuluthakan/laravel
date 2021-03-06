<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $guarded = ['id'];

    protected $fillable = ['name'];

    public function post()
    {
      return $this->hasOne(Post::class);
    }
}
