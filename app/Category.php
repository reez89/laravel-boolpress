<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   

    /**
     * Get the user that owns the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

     /* 1 categoria può avere molti posts */
     
    public function posts()
    {
        return $this->hasMany('App\Post');
    }










}
