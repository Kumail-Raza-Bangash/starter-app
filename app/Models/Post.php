<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //Here we can add these all record to the database with one line command
    //Post::create(['title'=>'third title','excerpt'=>'third long excerpt','content'=>'third long content','image'=>'images/tech3.jpg']);
    protected $fillable = [
        'title',
        'excerpt',
        'content',
        'image'
    ];

    //Here we can not add id
    protected $guarded = [
        'id'
    ];
}
