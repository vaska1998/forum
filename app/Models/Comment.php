<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Theme;
class Comment extends Model
{
    use HasFactory;


    protected $table = 'comments';
    protected $guarded = [];
    public function theme(){
        return $this->belongsTo(Theme::class, 'theme_id','id');
    }
}
