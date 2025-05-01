<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function order(){
        return $this->belongsToMany(Order::class);
    }

    public function comments(){
        return $this->morphMany(Comment::class , 'commentable');
    }


    protected $fillable=['title' , 'description' , 'price' , 'sale_price'];
    protected $guarded=[];
}
