<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;

class ProductTranslation extends Model
{
    use Sluggable;

    public $timestamps = false;
    protected $fillable = ['name', 'slug', 'description', 'price'];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
