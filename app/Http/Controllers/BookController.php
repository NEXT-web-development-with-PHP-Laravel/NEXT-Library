<?php

namespace App\Http\Controllers;

use App\Models\book_tbl;
use App\Models\author_tbl;
use App\Models\category_tbl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $books = book_tbl::orderBy('created_at', 'desc')->paginate(10); //fetching data with each a page
        $books = book_tbl::join('author_tbls', 'author_tbls.id', '=', 'book_tbls.author_id')
            ->join('categories_tbl', 'categories_tbl.id', '=', 'book_tbls.category_id')
            ->get();

        return view('books.index', compact('books'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $books = book_tbl::join('author_tbls', 'author_tbls.id', '=', 'book_tbls.author_id')
            ->join('categories_tbl', 'categories_tbl.id', '=', 'book_tbls.category_id')
            ->get();

        return view('books.create', compact('books'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $books = DB::table("book_tbls")
            ->join("author_tbls", "book_tbls.author_id", "=", "author_tbls.id")
            ->join("categories_tbl", "book_tbls.category_id", "=", "categories_tbl.id")
            ->where("author_tbls.id", "=", $id)
            ->where("categories_tbl.id", "=", $id)
            ->get(); // Add get() to retrieve the data

        return view('books.show', compact('books'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $books = book_tbl::find($id);
        return view('books.edit', compact('books'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
