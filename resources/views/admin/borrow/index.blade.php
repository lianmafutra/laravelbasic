@extends('admin.templates.partials.default')

@section('content')
    <h1>Data pengembalian Buku</h1>
    <div class="card">
        <div class="card-header">
      
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            @include('admin.templates.partials.alerts')
         <table id="dataTable" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Id</th>
              <th>Nama</th>
              <th>Judul Buku</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
         
           
            </tbody>
           
          </table>
        </div>
        <!-- /.card-body -->
    </div>
     
    <form action="" method="POST" id="returnForm">
        @csrf
        @method('PUT')
        <input type="submit" value="Hapus" style="display:none">
    </form>
            
@endsection


<!-- push datatable hanya dipanggil di index book saja  -->
@push('css_datatable')
    <link rel="stylesheet" href="{{asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
@endpush

 
@push('scripts')
<!-- DataTables -->
<script src="{{asset('assets/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
    <script>
        $(function() {
            $('#dataTable').DataTable({
                processing:true,
                serverSide:true,
                ajax:'{{ route('admin.borrow.data')}}',
                columns:[
                    {data:'DT_RowIndex',orderable:false, searchable:false}, 
                    {data:'user'},
                    {data:'book_title'},
                    {data:'action'}
                ]
            }); 
        });
    </script>
@endpush
