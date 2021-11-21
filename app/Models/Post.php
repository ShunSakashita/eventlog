<?php
//MVCモデルにおけるModel部分
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Post->post
class Post extends Model
{
    use HasFactory;
    protected $table = 'post';
    protected $fillable = [
        'teamname',
        'name',
        'place',
        'date',
        'content',
    ];
}
