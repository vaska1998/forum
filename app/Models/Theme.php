<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;

class Theme extends Model
{
    use HasFactory;
    protected $table = 'themes';
    protected $guarded = [];
        public function comments(){
            return $this->hasMany(Comment::class, 'theme_id','id');
        }
}
