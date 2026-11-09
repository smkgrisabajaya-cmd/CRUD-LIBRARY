<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelBook;

class BookController extends Controller
{
    public function index()
    {
        $DataBook = ModelBook::all();

        return view('book.index', compact('DataBook'));
    }

    public function create()
    {
        return view('book.formBook');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'author' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'stock' => 'required|integer|min:0'
        ]);

        ModelBook::create($validated);

        return redirect('/indexBook');
    }

    public function edit($id)
    {
        $updateBook=ModelBook::findOrFail($id);

        return view('/indexBook',compact('updateBook'));
    }

    


}
