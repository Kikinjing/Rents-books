<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return view('landing.welcome');
    }

    public function books()
    {
        $book = Book::get();
        return view('dashboard.books', compact('book'));
    }

    public function addbook()
    {
        return view('admin.create-book');
    }


    public function createBook(Request $request)
   {
    $book = $request->validate([
        'tittle' => 'required', 
        'author' => 'required', 
        'publisher' => 'required', 
        'release_date' => 'required', 
        'cover' => 'required', 
    ]);
    Book::create($book);

    return redirect('books');
   }

   public function deleteBook($id)
   {
    Book::where('id', $id)->delete();
    return redirect(route('books'));
   }


}
