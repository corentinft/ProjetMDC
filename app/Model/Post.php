<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Post extends Model
{
    use Notifiable;

    /**
     * @var array
     */
    protected $fillable = [
        'title', 'object', 'text', 'user_id', 'url_image'
    ];

    /**
     * @var array
     */
    protected $hidden = [
    ];

}
