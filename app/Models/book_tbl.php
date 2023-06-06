<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book_tbl extends Model
{
    use HasFactory;

    protected $table = 'book_tbls';

    protected $fillable = [
        'id',
        'title',
        'description',
        'book_img',
        'status',
        'author_id',
        'category_id',
    ];
}
