<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $guarded=[];

    protected $table = 'posts';

    public function user(){

        return $this->belongsTo(User::class);
    }

    public function categorie(){

        return $this->belongsTo(Category::class);
    }
}
