<div class="modal fade" id="formModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit Data Modal</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="member">
          @csrf
          <div id="method"></div>
          <div class="card-body">
            <div class="form-group row">
              <label for="nama" class="col-sm-2 col-form-label">Nama</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" name="nama" placeholder="nama">
              </div>
            </div>
            <div class="form-group row">
              <label for="no_hp" class="col-sm-2 col-form-label">no hp</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="No. Hp">
              </div>
            </div>
            <div class="form-group row">
              <label for="alamat" class="col-sm-2 col-form-label">alamat</label>
              <div class="col-sm-10">
                <textarea class="form-control" id="alamat" name="alamat" placeholder="Alamat"></textarea>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-deafult" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
          <!-- /.card-footer -->
        </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>