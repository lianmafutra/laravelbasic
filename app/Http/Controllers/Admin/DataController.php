<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Author;
use App\Book;

class DataController extends Controller
{

    public function authors(){
        $author =Author::orderBy('name','ASC');
        return datatables()->of($author)
        ->addColumn('action','admin.author.action')
        ->addIndexColumn()
        ->rawColumns(['action'])
        ->toJson();
    }

    public function books(){
        $book =Book::orderBy('title','ASC');
        return datatables()->of($book)
        ->addIndexColumn()
        ->toJson();
    }


}
