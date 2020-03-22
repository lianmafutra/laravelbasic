@extends('frontend.template.default')
@section('content')
<h2>Koleksi Buku</h2>
  <blockquote> <p class="flow-text">Koleksi Buku yang bisa kamu baca dan pinjam </p></blockquote>
   
   <div class="row">
     
    @foreach ($books as $book)
      @component('frontend.template.components.card-book',['book'=>$book])
      @endcomponent
    @endforeach
   </div> 
   <!-- end row -->

   <!--Pagination  -->
   {{ $books->links('vendor.pagination.materialize') }}


@endsection