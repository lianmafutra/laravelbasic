@extends('frontend.template.default')

@section('content')
<div class="row">
    <h1>Buku yang sedang dipinjam</h1>
    <h5 style=" color: #b7b7b7;">Kamu sedang meminjam {{$books->count()}} buku</h5>
    <br>
    @foreach ($books as $book)
            
        <div class="card horizontal hoverable">
            <img src="{{$book->getCover()}}" >
            <div class="card-stacked">
                <div class="card-content">
                    <h4 class="red-text accent-2"> {{$book->title}}</h4>
                    <blockquote><p>{{ $book->description  }}</p></blockquote>

                    <p><i class="material-icons">person</i> : {{ $book->author->name }}</p>
                    <p><i class="material-icons">book</i> : {{ $book->qty }}</p> 
                </div>

                <div class="card-action">
                    <a href="#" class="btn red accent-1 right waves-effect waves-light">Pinjam Buku</a>
                </div>
            </div>
        </div>
        @endforeach
        
</div>
@endsection