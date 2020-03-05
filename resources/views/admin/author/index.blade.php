@extends('admin.templates.default')

@section('content')
    <h1>Penulis</h1>
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">DataTable with default features</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Id</th>
              <th>Nama</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>1</td>
              <td>lian
              </td>
              <td>edit|hapus
            </td>
              
            </tr>
           
            </tbody>
           
          </table>
        </div>
        <!-- /.card-body -->
      </div>
    
@endsection
