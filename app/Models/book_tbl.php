<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book_tbl extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'title',
        'description',
        'status',
        'book_img',
        'author_id'
    ];
}
