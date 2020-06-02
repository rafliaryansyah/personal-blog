<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class Category extends Model
{
    
    protected $fillable = ['name', 'slug'];

    protected $table = 'category';

    public function posts()
    {
        return $this->hasMany('Post');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

}
