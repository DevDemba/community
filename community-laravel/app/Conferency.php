<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conferency extends Model
{
    protected $fillable = [
        'Token',
        'title',
        'image' => 'required | image | mimes: jpeg, png, jpg, gif, svg | max: 2048',
        'place',
        'date',
        'description',
        'vote'
    ];
}
