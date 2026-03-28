<?php

namespace App\Http\Controllers;

use App\Models\book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::where('status', 1)->latest()->get();
        return view('books.read', ['book' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response()->view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'year_published' => 'required|integer',
        ]);

        $book = new book();
        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->year_published = $request->input('year_published');
        $book->save();

        return response()->view('books.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(book $book)
    {
        return response()->view('books.update', ['book' => $book]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, book $book)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'year_published' => 'required|integer',
        ]);

        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->year_published = $request->input('year_published');
        $book->status = 1;
        $book->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->status = 0;
        $book->save();

        return redirect()->route('books.index')->with('success', 'تم حذف الكتاب بنجاح');
    }
}
