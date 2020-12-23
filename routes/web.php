<?php

use Illuminate\Support\Facades\Route;

//GET -> Rota de livros
Route::get('/books', 'BookController@index')->name('books.index'); //Rota para página principal
Route::get('/books/create', 'BookController@create')->name('books.create'); //Rota para gravar novo livro
Route::get('/books/{id}/edit', 'BookController@edit')->name('books.edit'); //Rota para edição dos livros

//POST -> Envio de dados
Route::post('/books', 'BookController@store')->name('books.store'); //Rota para inserção de livro no banco

// PUT -> atualizar dados (somente em formulários)
Route::put('/books/{id}', 'BookController@update')->name('books.update'); //atualizar informação de livros

//DELETE -> deletar dados (Somente em formulários)
Route::delete('/books/{id}', 'BookController@destroy')->name('books.destroy'); //exclusão de livro do banco