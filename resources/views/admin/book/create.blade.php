@extends('admin.templates.partials.default')
@section('content')
<div class="card">
    <div class="card-header">
        <h6 class="m-0 text-dark">Tambah data buku</h6>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <form role="form" action="{{route('admin.book.store')}}" method="POST" enctype="multipart/form-data">
        @csrf 

            {{-- input title --}}
              <div class="form-group @error('title') 'has-error' @enderror">
                  <label for="">Judul</label>
                  <input type="text" class="form-control" name="title" value="{{old('title')}}" 
                  placeholder="Masukan judul buku">
                  @error('title')
                    <span class="help-block" style="color:red">{{$message}}</span>
                  @enderror
              </div>

               {{-- input deskripsi --}}
              <div class="form-group @error('desc') 'has-error' @enderror">
                  <label for="">Deskripsi</label>
                  <textarea type="text" class="form-control" name="desc" 
                      placeholder="Masukan deskripsi buku">{{old('desc')}}</textarea>
                  @error('desc')
                    <span class="help-block" style="color:red">{{$message}}</span>
                  @enderror
              </div>

               {{-- input author --}}
              <div class="form-group @error('author') 'has-error' @enderror">
                  <label for="">Penulis</label>
                  <select name="author" id="" class="form-control select2" data-placeholder="Pilih Penulis Buku">
                    @foreach ( $authors as $author)
                    
                      <option></option>
                      <option value="{{$author->id}}">{{$author->name}}</option>
                    @endforeach
                  </select>
                  @error('author')
                    <span class="help-block" style="color:red">{{$message}}</span>
                  @enderror
              </div>

              

              {{-- input cover --}}
              <div class="form-group @error('cover') 'has-error' @enderror">
                <label for="">Cover</label>
                <input type="file" class="form-control-file" name="cover">
                @error('cover')
                  <span class="help-block" style="color:red">{{$message}}</span>
                @enderror
            </div>
            {{-- <div class="form-group @error('cover') 'has-error' @enderror">
               <label for="customFile">Cover</label> 
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" name="cover" for="customFile">Upload Cover</label>
                @error('cover')
                  <span class="help-block" style="color:red">{{$message}}</span>
                @enderror
              </div>
            </div> --}}
            
               {{-- input jumlah --}}
               <div class="form-group @error('qty') 'has-error' @enderror">
                <label for="">Jumlah</label>
                <input type="text" class="form-control" name="qty" value="{{old('qty')}}" 
                placeholder="Masukan jumlah buku">
                @error('qty')
                  <span class="help-block" style="color:red">{{$message}}</span>
                @enderror
            </div>
              
            <button type="submit" class="btn btn-primary">Tambah Data</button>
            <!-- /.card-body -->

           
          </form>
    </div>
    <!-- /.card-body -->
</div>
@endsection

@push('select2css')
    <link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.css')}}">
@endpush

@push('scripts')
    <script src="{{asset('assets/plugins/select2/js/select2.full.min.js')}}"></script>

  <script>
    $('.select2').select2();
  </script>
@endpush