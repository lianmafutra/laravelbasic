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
            ->addColumn('author', function(Book $model){
                 return $model->author->name;
            })
            ->editColumn('cover', function(Book $model){
                return '<img src="'. $model->cover.'">';
           })
            ->addIndexColumn()
            ->rawColumns(['cover'])
            ->toJson();
    }


}
