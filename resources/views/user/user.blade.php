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
            <h1>User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a href="">Home</a></li>
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
            <i class="fas fa-plus-square"></i> Tambah Data
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
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped text-center">
            <thead>
            <tr>
              <th>No</th>
              <th>ID</th>
              <th>Username</th>
              <th>Email</th>
              <th>Password</th>
              <th>Hak Akses</th>
              <th>Role</th>
              <th>Status</th>
              <th></th>
            </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
              <tr>
                <td>{{ $i=(isset($i)?++$i:$i=1) }}</td>
                <td>{{ $user->id_operator }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->password }}</<td>
                <td>{{ $user->hak_akses }}</<td>
                <td>{{ $user->role }}</<td>
                <td>{{ $user->status }}</<td>
                <td>
                  <button class="btn p-0" type="button"
                    data-toggle="modal" data-target="#formModal"
                    data-mode="edit" data-id="{{ $user->id }}" data-id_operator="{{ $user->id_operator }}" data-username="{{$user->username}}" data-email="{{ $user->email}}"
                    data-password="{{ $user->password}}"data-hak_akses="{{ $user->hak_akses }}" data-role="{{ $user->role }}" data-status="{{ $user->status }}" >
                    <i class="fas fa-pen"></i>
                  </button>
                </form>

                  <form action="user/{{$user->id}}" method="post" style="display: inline">
                    @csrf 
                    @method('DELETE')
               
                    <button class="btn p-0 delete-data" type="button" ><i class="fas fa-trash"></i></button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->



      
    </section>
</div>
    <!-- /.content -->
    @include('user.modal')
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
  console.log('user')
  const btn = $(e.relatedTarget)
  const mode = btn.data('mode')
  const id = btn.data('id')
  const id_operator = btn.data('id_operator')
  const username = btn.data('username')
  const email = btn.data('email')
  const password = btn.data('password')
  const hak_akses = btn.data('hak_akses')
  const role = btn.data('role')
  const status = btn.data('status')
  const modal = $(this)
    if(mode=='edit'){
      modal.find('.modal-title').text('Edit Data User')
      modal.find('#id_operator').val(id_operator)
      modal.find('#username').val(username)
      modal.find('#email').val(email)
      modal.find('#password').val(password)
      modal.find('#hak_akses').val(hak_akses)
      modal.find('#role').val(role)
      modal.find('#status').val(status)
      modal.find('.modal-body form').attr('action','{{ url("admin/user") }}/'+id)
      modal.find('#method').html('@method("PATCH")')
    }else{
      modal.find('.modal-title').text('Input Data User')
      modal.find('#id_operator').val('')
      modal.find('#username').val('')
      modal.find('#email').val()
      modal.find('#password').val('')
      modal.find('#hak_akses').val('')
      modal.find('#role').val('')
      modal.find('#status').val('')
      modal.find('#method').html('')
      modal.find('.modal-body form').attr('action','{{ url("admin/user")}}')
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