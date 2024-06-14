<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $fillable=[
        'title',
        'content'
    ];

    public static function boot(){
        parent::boot();

        static::creating(function($post){
            $post->slug = Str::of($post->title)->slug('-');
        });
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function scopeActive($query)
    {
        return $query->where('active', true);
    }
}
