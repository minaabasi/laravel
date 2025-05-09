<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory , SoftDeletes;

    protected $guarded=[];

    public function comments(){
        return $this->morphMany(Comment::class , 'commentable');
    }

    public function images(){
        return $this->morphMany(Image::class ,'imageable');
    }

    
}
