<div class="modal fade" id="formModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit Data User</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" method="POST" action="member">
            @csrf
            <div id="method"></div>
            <div class="card-body p-1">
              <div class="form-group row">
                <label for="id_operator" class="col-sm-2 pr-1 col-form-label">ID</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="id_operator" name="id_operator" placeholder="id_operator">
                </div>
              </div>
              <div class="form-group row">
                <label for="username" class="col-sm-2 pr-1 col-form-label">Username</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="username" name="username" placeholder="username">
                </div>
              </div>
              <div class="form-group row">
                <label for="email" class="col-sm-2 pr-1 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="email" name="email" placeholder="email">
                </div>
              </div>
              <div class="form-group row">
                <label for="password" class="col-sm-2 pr-1 col-form-label">Password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="password" name="password" placeholder="password"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <label for="hak_akses" class="col-sm-2 pr-1 col-form-label">Hak Akses</label>
                <div class="col-sm-10">
                  <select type="text" class="form-control" id="hak_akses" name="hak_akses" placeholder="hak_akses">
                    <option value="walas">walas</option>
                    <option value="umum">umum</option>
                    <option value="bk">bk</option>
                    <option value="prod">prod</option>
                    <option value="siswa kelas">siswa kelas</option>
                    <option value="siswa km">siswa km</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label for="role" class="col-sm-2 pr-1 col-form-label">Role</label>
                <div class="col-sm-10">
                  <select type="text" class="form-control" id="role" name="role" placeholder="role">
                    <option value="siswa">siswa</option>
                    <option value="guru">guru</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label for="status" class="col-sm-2 pr-1 col-form-label">Status</label>
                <div class="col-sm-10">
                  <select type="text" class="form-control" id="status" name="status" placeholder="status">
                    <option value="Aktif">Aktif</option>
                    <option value="Suspend">Suspend</option>
                    <option value="Tidak Aktif">Tidak Aktif</option>
                  </select>
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