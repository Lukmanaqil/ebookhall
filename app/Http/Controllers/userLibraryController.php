<?php

namespace App\Http\Controllers;
use App\Models\UserLibrary;
use App\Models\Book;
class userLibraryController extends Controller
{
    public function view(){
        $user = UserLibrary::where('email',session('email'))->get();
        //$books = Book::where('isbn', $user->isbn)->get();
        $books = [];
        foreach ($user as $value) {
            array_push($books, Book::where('isbn', $value->isbn)->first());
          }
        return view('UserLibrary', [
            'books' => $books,
        ]);
    }

}
