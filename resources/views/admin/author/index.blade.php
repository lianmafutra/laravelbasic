@extends('admin.templates.default')

@section('content')
    <h1>Penulis</h1>
    <div class="card">
        {{-- <div class="card-header">
          <h3 class="card-title">DataTable with default features</h3>
        </div> --}}
        <!-- /.card-header -->
        <div class="card-body">
          <table id="dataTable" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Id</th>
              <th>Nama</th>
             
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
                    {data:'id'},
                    {data:'name'}
                ]
            }); 
        });
    </script>
@endpush
