@extends('home')
@section('component')


<div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Pinjam alat</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <form class="m-4" action="/pinjam" method="post">
                @csrf

                <div class="form-group">
                  <label for="nama">Nama Peminjam</label>
                  <input type="text" class="form-control" name="nama_peminjam" id="nama_peminjam" placeholder="Masukkan Nama Peminjam" required>
                </div>
                <div class="form-group">
                  <label for="">Kelas</label>
                  <select name="kelas" id="kelas" class="form-control" required>
                    <option value="" selected hidden>Isi Kelas</option>
                    <option value="X AK 1">X AK 1</option>
                    <option value="X AK 2">X AK 2</option>
                      <option value="X AK 3">X AK 3</option>
                      <option value="X AK 4">X AK 4</option>
                      <option value="X AK 5">X AK 5</option>
                      <option value="X AK 6">X AK 6</option>
                      <option value="X TKJ 1">X TKJ 1</option>
                      <option value="X TKJ 2">X TKJ 2</option>
                      <option value="X TKJ 3">X TKJ 3</option>
                      <option value="X RPL 1">X RPL 1</option>
                      <option value="X RPL 2">X RPL 2</option>
                      <option value="XI AK 1">XI AK 1</option>
                      <option value="XI AK 2">XI AK 2</option>
                      <option value="XI AK 3">XI AK 3</option>
                      <option value="XI AK 4">XI AK 4</option>
                      <option value="XI AK 5">XI AK 5</option>
                      <option value="XI AK 6">XI AK 6</option>
                      <option value="XI TKJ 1">XI TKJ 1</option>
                      <option value="XI TKJ 2">XI TKJ 2</option>
                      <option value="XI TKJ 3">XI TKJ 3</option>
                      <option value="XI RPL 1">XI RPL 1</option>
                      <option value="XI RPL 2">XI RPL 2</option>
                      <option value="XII AK 1">XII AK 1</option>
                      <option value="XII AK 2">XII AK 2</option>
                      <option value="XII AK 3">XII AK 3</option>
                      <option value="XII AK 4">XII AK 4</option>
                      <option value="XII AK 5">XII AK 5</option>
                      <option value="XII AK 6">XII AK 6</option>
                      <option value="XII TKJ 1">XII TKJ 1</option>
                      <option value="XII TKJ 2">XII TKJ 2</option>
                      <option value="XII TKJ 3">XII TKJ 3</option>
                      <option value="XII RPL 1">XII RPL 1</option>
                      <option value="XII RPL 2">XII RPL 2</option>
                      <option value="XIII AK 1">XIII AK 1</option>
                      <option value="XIII AK 2">XIII AK 2</option>
                      <option value="XIII AK 3">XIII AK 3</option>
                      <option value="XIII AK 4">XIII AK 4</option>
                      <option value="XIII AK 5">XIII AK 5</option>
                      <option value="XIII AK 6">XIII AK 6</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Tanggal Pinjam</label>
                  <input type="date" name="tanggal_pinjam" id="tgl_pinjam"class="form-control" required>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-6">
                      <label for="">Jam Pinjam</label>
                      <input type="time" name="jam_pinjam" id="jam_pinjam" class="form-control" required>
                    </div>
                    <div class="col-lg-6">
                      <label for="">Maks pinjam</label>
                      <input type="time" name="jam_max_pinjam" id="max_pinjam" class="form-control"required>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="">Phone Number</label>
                  <input type="text " name="nomor_tlp" id="" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="">Guru Mata Pelajaran</label>
                  <input type="text" name="guru_mapel" class="form-control"required>
                </div>
                <div class="form-group">
                  <label for="">Keterangan Pinjam</label>
                  <input type="text" name="ket_pinjam" id="" class="form-control"required>
                </div>
                <div class="form-group">
                  <label for="">Petugas</label>
                  <select name="userid" id="userid" class="form-control" required>
                    <option value="" selected hidden>Masukkan Petugas</option>
                    @foreach($petugas as $item)
                    <option value="{{ $item->userid }}">{{ $item->username }}</option>
                    @endforeach
                </select>
                </div>
                <div class="form-group">
                  <label for="">Barang</label>
                  <select name="kode_barang" id="" class="form-control" required>
                      <option value="" selected hidden>Masukkan Barang</option>
                      @foreach($barang as $item)
                      <option value="{{$item->kode_barang}}">{{$item->nama_barang}}</option>
                      @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Jumlah Pinjam</label>
                  <input type="number" name="jumlah_pinjam" id="" class="form-control" required>
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