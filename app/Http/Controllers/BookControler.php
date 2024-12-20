<?php

namespace App\Http\Controllers;
use App\Models\Book;

use Illuminate\Http\Request;

class BookControler extends Controller
{
   public function index() {
    $books = Book::all();
    return view("Book", compact("books"));
   }
}
