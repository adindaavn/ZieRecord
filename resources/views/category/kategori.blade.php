@extends('templates.header')

@push('style')
<link rel="stylesheet" href="{{ asset('assets') }}/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('assets') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{ asset('assets') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="{{ asset('assets') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<link rel="stylesheet" href="{{ asset('assets') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endpush

@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kategori</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Home</li>
              <li class="breadcrumb-item active">User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
            <i class="fas fa-plus-square"></i> Data Category
          </button>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
        </div>
        <div class="card-body">
          @if (session('success'))
          <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i> Sukses!</h5>
            {{ session('success') }}.
          </div>
          @endif

          @if ($errors->any())
          <div class="alert alert-danger alert-dismissble">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            <h5><i class="icon fas fa-ban"></i> Data Gagal Disimpan!</h5>
            <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>                  
              @endforeach
            </ul>
          </div>
              
          @endif
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>No.</th>
              <th>Nama</th>
              <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($categories as $kategori)
              <tr>
                  <td>{{ $i= (isset($i)?++$i:$i=1) }}</td>
                  <td>{{ $kategori->nama }}</td>
                    <td><button class="btn bg-success" type="button" data-toggle="modal" data-target="#formModal" data-mode="edit" data-id="{{ $kategori->id }}" data-nama="{{ $kategori->nama }}"><i class="fas fa-edit"></i> Edit </button>
                      <form action="category/{{$kategori->id}}" method="post" style="display: inline">
                      @csrf 
                      @method('DELETE')
                 
                      <button class="btn bg-danger delete-data" type="button" ><i class="fas fa-trash-alt"></i> Delete </button>
                    </form>
                    </td>
                  </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer text-center">
            Now You're Premium Member!
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

      @include('category.modal')
    </section>
    <!-- /.content -->
@endsection

@push('script')
<!-- DataTables  & Plugins -->
<script src="{{ asset('assets') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('assets') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('assets') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('assets') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{ asset('assets') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('assets') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{ asset('assets') }}/plugins/jszip/jszip.min.js"></script>
<script src="{{ asset('assets') }}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{ asset('assets') }}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{ asset('assets') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{ asset('assets') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{ asset('assets') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets') }}/dist/js/adminlte.min.js"></script>
<script src="{{ asset('assets') }}/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Page specific script -->
<script>
 $('#formModal').on('show.bs.modal', function(e){
  console.log('kategori')
  const btn = $(e.relatedTarget)
  const mode = btn.data('mode')
  const id = btn.data('id')
  const nama = btn.data('nama')
  const modal = $(this)
    if(mode=='edit'){
      modal.find('.modal-title').text('Edit Data Kategori')
      modal.find('#nama').val(nama)
      modal.find('.modal-body form').attr('action','{{ url("category") }}/'+id)
      modal.find('#method').html('@method("PATCH")')
    }else{
      modal.find('.modal-title').text('Input Data Kategori')
      modal.find('#nama').val('')
      modal.find('#method').html('')
      modal.find('.modal-body form').attr('action','{{ url("category")}}')
    }
});
// delete data
$('.delete-data').click(function(e){
  e.preventDefault()
  const data = $(this).closest('tr').find('td:eq(1)').text()
  Swal.fire({
    title: 'Data akan hilang!',
    text: `Apakah penghapusan data ${data} akan dilanjutkan?`,
    icon: 'warning',
    showDenyButton: true,
    confirmButtonText: 'Ya',
    denyButtonText: 'Tidak',
    focusConfirm: false
  })
  .then((result) => {
    if(result.isConfirmed) $(e.target).closest('form').submit()
    else swal.close()
  })
})
 
 
 $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endpush
