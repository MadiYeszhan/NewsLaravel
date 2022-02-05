<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'author_id',
        'title',
        'preview',
        'content'
    ];

    public function user(){
    	return $this->belongsTo(User::class, 'author_id');
	}
}
