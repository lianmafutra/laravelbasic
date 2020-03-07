@extends('admin.templates.partials.default')
@section('content')
<div class="card">
    <div class="card-header">
        <h6 class="m-0 text-dark">Edit data penulis</h6>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <form role="form" action="{{route('admin.author.update', $author)}}" method="POST">
        @csrf 
        @method('PUT')
              <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input type="text" class="form-control" name="name" value="{{$author->name}}" placeholder="Masukan Nama Penulis">
              </div>
        
            <button type="submit" class="btn btn-primary">Edit Data</button>
            <!-- /.card-body -->

           
          </form>
    </div>
    <!-- /.card-body -->
</div>
@endsection