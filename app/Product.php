<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Dimsav\Translatable\Translatable;

class Product extends Model
{
    use Translatable;

    public $translatedAttributes = ['name', 'slug', 'description', 'price'];

    protected $fillable = ['name', 'slug', 'description', 'price'];
}
