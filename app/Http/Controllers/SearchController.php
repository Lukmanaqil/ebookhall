<?php

namespace App\Http\Controllers;
use App\Models\Book;
class SearchController extends Controller
{
    public function search()
    {
        $value = request('Search');
        $type = request('bookCheck');

        if ($type == 'ISBN') {
            $books = Book::where('isbn', $value)->get();
            return view('MasterLibrary', [
                'books' => $books,
            ]);
        } else if ($type == 'Genre') {
            $books = Book::where('genre', $value)->get();
            return view('MasterLibrary', [
                'books' => $books,
            ]);
        } else if ($type == 'Title') {
            $books = Book::where('title', $value)->get();
            return view('MasterLibrary', [
                'books' => $books,
            ]);
        }
    }
}
