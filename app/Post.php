<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    /**
     * Get the user associated with the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */


     /* 1 post può avere 1 categoria ed 1 categoria può avere molti post. */
     
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

   /**
     * Get the user associated with the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
