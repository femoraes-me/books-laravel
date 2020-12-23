<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //classe para aceitar o Soft Delete

class Book extends Model
{
    //protected $table = 'books';

    use SoftDeletes;
}
