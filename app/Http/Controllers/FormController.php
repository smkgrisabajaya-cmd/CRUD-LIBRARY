<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelBook;

class FormController extends Controller
{
    public function index()
    {
        return view('book.formBook');
    }

    public function postForm(Request $request){
        $validatedBook=$request->validate([
            'title'=>'required|string|max:255',
            'author'=>'required|string|max:255',
            'stock'=>'required|integer|min:0',
        ]);

        ModelBook::create([
            'title'=>$validatedBook['title'],
            'author'=>$validatedBook['author'],
            'stock'=>$validatedBook['stock']
        ]);

        return redirect('/indexBook')->with('successBook','Buku berhasil di tambahkan');
    }

    
}
