<?php

namespace App\Http\Controllers\Admin;

use App\Author;
use App\Book;
use App\Http\Controllers\Controller;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.book.index',[
            'title'=>'Data Buku'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.book.create',[
            'title'=> 'Tambah data buku',
            'authors'=> Author::orderBy('name','ASC')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'  => 'required',
            'desc'   => 'required',
            'qty'    => 'required|numeric',
            'author' => 'required',
            'cover'  => 'file|image'
        ]);


        $cover = null;
        if($request->hasFile('cover')){
            $cover = $request->file('cover')->store('assets/covers');
        }


     try {
        Book::create([
            'title'       => $request->title,
            'description' => $request->desc,
            'author_id'   => $request->author,
            'cover'       => str_replace('assets/covers/',"",$cover),
            'qty'         => $request->qty
        ]);

        return redirect()->route('admin.book.index')->withSucces('Data buku berhasil ditambahkan');
     } catch (\Throwable $th) {
        dd($th);
     }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('admin.book.edit',[
            'title'   => 'edit data Buku',
            'book'    => $book,
            'authors' =>  Author::orderBy('name','ASC')->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $this->validate($request,[
            'title'  => 'required',
            'desc'   => 'required',
            'qty'    => 'required|numeric',
            'author' => 'required',
            'cover'  => 'file|image'
        ]);


        $cover = $book->cover;
   
        if($request->hasFile('cover')){
            Storage::delete($book->cover); //menghapus gambar lama ketika update
            $cover = $request->file('cover')->store('assets/covers');
          
        }


     try {
        $book->update([
            'title'       => $request->title,
            'description' => $request->desc,
            'author_id'   => $request->author,
            'cover'       => str_replace('assets/covers/',"",$cover),
            'qty'         => $request->qty
        ]);

        return redirect()->route('admin.book.index')->withSucces('Data buku berhasil ditambahkan');
     } catch (\Throwable $th) {
        dd($th);
     }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
