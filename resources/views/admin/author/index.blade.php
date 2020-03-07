@extends('admin.templates.partials.default')

@section('content')
    <h1>Penulis</h1>
    <div class="card">
        <div class="card-header">
        <a href="{{route('admin.author.create')}}" class="btn btn btn-primary">Tambah Penulis</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="dataTable" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Id</th>
              <th>Nama</th>
              <th>Aksi</th>
             
            </tr>
            </thead>
            <tbody>
         
           
            </tbody>
           
          </table>
        </div>
        <!-- /.card-body -->
    </div>
    
@endsection

@push('scripts')
    <script>
        $(function() {
            $('#dataTable').DataTable({
                processing:true,
                serverSide:true,
                ajax:'{{ route('admin.author.data')}}',
                columns:[
                    {data:'DT_RowIndex',orderable:false, searchable:false}, 
                    {data:'name'},
                    {data:'action'}
                ]
            }); 
        });
    </script>
@endpush
