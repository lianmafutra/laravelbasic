<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Author;
use App\Book;
use App\BorrowHistory;

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
                return '<img src="'. $model->getCover().'" height="150px">';
                })
            ->addColumn('action','admin.book.action')
            ->addIndexColumn()
            ->rawColumns(['cover','action'])
            ->toJson();
    }

    public function borrows(){
        $borrows = BorrowHistory::latest();
        
        return datatables()->of($borrows)
            //->addColumn('action','admin.book.action')
            ->addColumn('user', function(BorrowHistory $model){
                return $model->user->name; })
            ->addColumn('book_title', function(BorrowHistory $model){
                    return $model->book->title; })
            ->addColumn('action','admin.borrow.action')
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->toJson();
    }


}
