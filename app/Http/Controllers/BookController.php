<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelBook;

class BookController extends Controller
{
    public function index()
    {
        $DataBook=ModelBook::all();

        return view('book.index',compact('DataBook'));
    }
}
