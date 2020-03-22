@extends('admin.templates.partials.default')
@section('content')
<div class="card">
    <div class="card-header">
        <h6 class="m-0 text-dark">Tambah data penulis</h6>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <form role="form" action="{{route('admin.author.store')}}" method="POST">
        @csrf 
              <div class="form-group @error('name') 'has-error' @enderror">
                <label for="">Nama</label>
              <input type="text" class="form-control" name="name" value="{{old('name')}}" 
              placeholder="Masukan Nama Penulis">
                @error('name')
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