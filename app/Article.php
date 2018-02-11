<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Article extends Model
{
    protected $fillable = ['meta_title','meta_description','meta_keyword','title',
        'slug','image_show','image','description','description_short',
        'published','created_by','modified_by'
    ];


    public function categories()
    {
        return $this->morphToMany('App\Category','categoryable');
    }

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug(mb_substr($this->title,0,40)
            . \Carbon\Carbon::now()->format('dmyHi'),'-');
    }
}
