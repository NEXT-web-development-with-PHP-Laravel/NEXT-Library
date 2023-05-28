<?php

namespace App\Models;

use App\Http\Controllers\BookController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\book_tbl;

class author_tbl extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'author_name',
        'author_bio',
    ];
    public function books()
    {
        return $this->hasMany(book_tbl::class, 'author_id', 'id');
    }
}
