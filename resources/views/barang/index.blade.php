@extends('home')
@section('component')

<div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Barang</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <form class="m-4" action="/barang" method="post" enctype="multipart/form-data">
                @csrf
                
                <div class="form-group">
                  <label for="">Kode Barang</label>
                  <input type="text" class="form-control" name="kode_barang" id="kode_barang" placeholder="Masukkan kode Barang" required>
                </div>
                <div class="form-group">
                  <label for="nama">Nama Barang</label>
                  <input type="text" class="form-control" name="nama_barang" id="nama_barang" placeholder="Masukkan Nama Barang" required>
                </div>
                <div class="form-group">
                  <label for="nama">Stok Barang</label>
                  <input type="number" class="form-control" name="stok" id="stok" placeholder="Masukkan Stok Barang" required>
                </div>
                <div class="form-group">
                  <label for="nama">Jenis Barang</label>
                  <input type="text" class="form-control" name="jenis_barang" id="jenis_barang" placeholder="Masukkan Jenis Barang" required>
                </div>
                <div class="form-group">
                  <label for="nama">Satuan</label>
                  <input type="text" class="form-control" name="satuan" id="satuan" placeholder="Masukkan Satuan Barang" required>
                </div>
                <div class="form-group">
                  <label for="nama">Foto</label>
                  <input type="file" class="form-control" name="foto" id="foto" placeholder="Masukkan Foto Barang" required>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-primary">Reset</button>
              </form>
            </div>
          </div>
        </div>
      </div>
</div>
</main>
@endsection