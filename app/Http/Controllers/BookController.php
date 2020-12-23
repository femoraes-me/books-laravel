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

    //função para alteração de cadastro de livro
    public function edit($id)
    {
        $book = Book::findOrFail($id);

        return view('books.edit', compact('book'));
    }

    //função para alteração de livros
    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id); //encontrando livro pelo id

        $book->name = $request->name;
        $book->author = $request->author;
        $book->category = $request->category;

        $book->save();

        return redirect()->route('books.index');
    }

    //função para deleção de livros
    public function destroy($id) 
    {
        $book = Book::findOrFail($id); //encontrando livro pelo id   
        $book->delete();

        return redirect()->route('books.index');
    }
}
