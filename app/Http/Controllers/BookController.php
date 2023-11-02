<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Book::get();

        return view('book/book_list', compact('data'));
    }

    public function addBook()
    {
        return view('book/add_book');
    }

    public function addBookDB(Request $request)
    {
        $data = $request->except('_token');

        $obj = new Book();
        $obj->author = $data['author'];
        $obj->name = $data['name'];
        $obj->price = $data['price'];
        $obj->category = $data['category'];
        $obj->save();

        return redirect('/book-list');
    }
}
