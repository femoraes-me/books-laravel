<?php

use Illuminate\Support\Facades\Route;

//GET -> Rota de livros
Route::get('/books', 'BookController@index')->name('books.index');
Route::get('/books/create', 'BookController@create')->name('books.create');

//POST -> Envio de dados
Route::post('/books', 'BookController@store')->name('books.store');

//Rota para edição dos livros
Route::get('/books/{id}/edit', 'BookController@edit')->name('books.edit');