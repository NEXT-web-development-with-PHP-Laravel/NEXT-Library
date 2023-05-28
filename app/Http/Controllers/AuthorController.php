<?php

namespace App\Http\Controllers;

use App\Models\author_tbl;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = author_tbl::orderBy('created_at', 'desc')->paginate(10); //fetching data with each a page 
        return view('authors.index')->with('authors', $authors);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(author_tbl $author)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(author_tbl $author)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, author_tbl $author)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(author_tbl $author)
    {
        //
    }
}
