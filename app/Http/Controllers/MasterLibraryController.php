<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\UserLibrary;

class MasterLibraryController extends Controller
{
    public function index()
    {
        $books = Book::all();

        return view('MasterLibrary', [
            'books' => $books,
        ]);
    }
    public function addtoUserLibrary()
    {

        $books = Book::all();
        $book = new UserLibrary();
        $book->timestamps = false;
        $book->email = session('email');
        $book->isbn = request('isbn');

        $book->save();

        return view('MasterLibrary', [
            'books' => $books,
        ]);
    }
}
