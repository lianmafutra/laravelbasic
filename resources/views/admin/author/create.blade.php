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
              <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input type="text" class="form-control" name="name" placeholder="Masukan Nama Penulis">
              </div>
        
            <button type="submit" class="btn btn-primary">Tambah Data</button>
            <!-- /.card-body -->

           
          </form>
    </div>
    <!-- /.card-body -->
</div>
@endsection