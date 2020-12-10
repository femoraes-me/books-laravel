<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

//Controller da tabela books
class BookController extends Controller
{
    // função principal
    public function index()
    {
        $books = Book::all();

        return view('books.index', compact('books'));
    }

    //função para chamar view de formulario de cadastro de livro
    public function create()
    {
        return view('books.create');
    }

    //função para inserção das informações no banco de dados
    public function store(Request $request) 
    {
        $book = new Book;

        $book->name = $request->name;
        $book->author = $request->author;
        $book->category = $request->category;

        $book->save();

        return redirect()->route('books.index');
    }
}
