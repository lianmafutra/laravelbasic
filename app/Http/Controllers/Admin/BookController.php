<?php

namespace App\Http\Controllers\Admin;

use App\Author;
use App\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
            'cover'       => $cover,
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
