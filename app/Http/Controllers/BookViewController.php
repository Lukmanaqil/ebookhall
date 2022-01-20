<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookViewController extends Controller
{
    public function view($isbn)
    {

        $book = Book::where('isbn', $isbn)->first();
        return view('BookView', [
            'books' => $book,
        ]);
    }
}
