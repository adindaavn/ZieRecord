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
                <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                <div class="col-sm-10">
                  <select class="form-control" id="kategori" name="kategori">
                    @foreach ($categories as $category)
                      <option value="{{ $category->nama }}">{{ $category->nama }}</option>
                    @endforeach
                </select>
                  {{-- <input type="sele" class="form-control" id="kategori" name="kategori" placeholder="kategori" value=""> --}}
                </div>
              </div>
              <div class="form-group row">
                <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="harga" name="harga" placeholder="harga">
                </div>
              </div>
              <div class="form-group row">
                <label for="satuan" class="col-sm-2 col-form-label">Satuan</label>
                <div class="col-sm-10">
                  <select type="text" class="form-control" id="satuan" name="satuan" placeholder="satuan">
                    <option value="pcs">pcs</option>
                    <option value="lusin">lusin</option>
                    <option value="dus">dus</option>
                    <option value="box">box</option>
                    <option value="karton">karton</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label for="qty" class="col-sm-2 col-form-label">Qty</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="qty" name="qty" placeholder="qty">
                </div>
              </div>
              <div class="form-group row">
                <label for="deskripsi" class="col-sm-2 col-form-label">deskripsi</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="deskripsi">
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