<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller {

  public function index() {

    $books = Book::all();

    return view('welcome', compact('books'));
  }

  public function show(Book $book) {

      // $book = Book::find($id);
      return $book;

      return view('welcome', compact('book'));
  }
}
