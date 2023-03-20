@extends('home')
@section('component')

<div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Projects table</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <form class="m-4" action="/update/{{ $edit_pinjam->kode_pinjam}}" method="post">
                @method('patch')
                @csrf

                <div class="form-group">
                  <label for="nama">Kode Pinjam</label>
                  <input type="text" class="form-control" name="kode_pinjam" id="kode_pinjam"  value="{{ old('kode_pinjam', $edit_pinjam->kode_pinjam)}}">
                </div>
                <div class="form-group">
                  <label for="nama">Nama Peminjam</label>
                  <input type="text" class="form-control" name="nama_peminjam" id="nama_peminjam" placeholder="Masukkan Nama Peminjam" value="{{ old('nama_peminjam', $edit_pinjam->nama_peminjam)}}">
                </div>
                <div class="form-group">
                  <label for="">Kelas</label>
                  <select name="kelas" id="kelas" class="form-control" value="{{ old('kelas', $edit_pinjam->kelas)}}">
                    <option value="" selected hidden>Isi Kelas</option>
                    <option value="X AK 1"{{ $edit_pinjam->kelas === 'X AK 1' ? 'selected' : '' }}>X AK 1</option>
                    <option value="X AK 2"{{ $edit_pinjam->kelas === 'X AK 2' ? 'selected' : '' }}>X AK 2</option>
                      <option value="X AK 3"{{ $edit_pinjam->kelas === 'X AK 3' ? 'selected' : '' }}>X AK 3</option>
                      <option value="X AK 4"{{ $edit_pinjam->kelas === 'X AK 4' ? 'selected' : '' }}>X AK 4</option>
                      <option value="X AK 5"{{ $edit_pinjam->kelas === 'X AK 5' ? 'selected' : '' }}>X AK 5</option>
                      <option value="X AK 6"{{ $edit_pinjam->kelas === 'X AK 6' ? 'selected' : '' }}>X AK 6</option>
                      <option value="X TKJ 1"{{ $edit_pinjam->kelas === 'X TKJ 1' ? 'selected' : '' }}>X TKJ 1</option>
                      <option value="X TKJ 2"{{ $edit_pinjam->kelas === 'X TKJ 2' ? 'selected' : '' }}>X TKJ 2</option>
                      <option value="X TKJ 3"{{ $edit_pinjam->kelas === 'X TKJ 3' ? 'selected' : '' }}>X TKJ 3</option>
                      <option value="X RPL 1"{{ $edit_pinjam->kelas === 'X RPL 1' ? 'selected' : '' }}>X RPL 1</option>
                      <option value="X RPL 2"{{ $edit_pinjam->kelas === 'X RPL 2' ? 'selected' : '' }}>X RPL 2</option>
                      <option value="XI AK 1"{{ $edit_pinjam->kelas === 'XI AK 1' ? 'selected' : '' }}>XI AK 1</option>
                      <option value="XI AK 2"{{ $edit_pinjam->kelas === 'XI AK 2' ? 'selected' : '' }}>XI AK 2</option>
                      <option value="XI AK 3"{{ $edit_pinjam->kelas === 'XI AK 3' ? 'selected' : '' }}>XI AK 3</option>
                      <option value="XI AK 4"{{ $edit_pinjam->kelas === 'XI AK 4' ? 'selected' : '' }}>XI AK 4</option>
                      <option value="XI AK 5"{{ $edit_pinjam->kelas === 'XI AK 5' ? 'selected' : '' }}>XI AK 5</option>
                      <option value="XI AK 6"{{ $edit_pinjam->kelas === 'XI AK 6' ? 'selected' : '' }}>XI AK 6</option>
                      <option value="XI TKJ 1"{{ $edit_pinjam->kelas === 'XI TKJ 1' ? 'selected' : '' }}>XI TKJ 1</option>
                      <option value="XI TKJ 2"{{ $edit_pinjam->kelas === 'XI TKJ 2' ? 'selected' : '' }}>XI TKJ 2</option>
                      <option value="XI TKJ 3"{{ $edit_pinjam->kelas === 'XI TKJ 3' ? 'selected' : '' }}>XI TKJ 3</option>
                      <option value="XI RPL 1"{{ $edit_pinjam->kelas === 'XI RPL 1' ? 'selected' : '' }}>XI RPL 1</option>
                      <option value="XI RPL 2"{{ $edit_pinjam->kelas === 'XI RPL 2' ? 'selected' : '' }}>XI RPL 2</option>
                      <option value="XII AK 1"{{ $edit_pinjam->kelas === 'XII AK 1' ? 'selected' : '' }}>XII AK 1</option>
                      <option value="XII AK 2"{{ $edit_pinjam->kelas === 'XII AK 2' ? 'selected' : '' }}>XII AK 2</option>
                      <option value="XII AK 3"{{ $edit_pinjam->kelas === 'XII AK 3' ? 'selected' : '' }}>XII AK 3</option>
                      <option value="XII AK 4"{{ $edit_pinjam->kelas === 'XII AK 4' ? 'selected' : '' }}>XII AK 4</option>
                      <option value="XII AK 5"{{ $edit_pinjam->kelas === 'XII AK 5' ? 'selected' : '' }}>XII AK 5</option>
                      <option value="XII AK 6"{{ $edit_pinjam->kelas === 'XII AK 6' ? 'selected' : '' }}>XII AK 6</option>
                      <option value="XII TKJ 1"{{ $edit_pinjam->kelas === 'XII TKJ 1' ? 'selected' : '' }}>XII TKJ 1</option>
                      <option value="XII TKJ 2"{{ $edit_pinjam->kelas === 'XII TKJ 2' ? 'selected' : '' }}>XII TKJ 2</option>
                      <option value="XII TKJ 3"{{ $edit_pinjam->kelas === 'XII TKJ 3' ? 'selected' : '' }}>XII TKJ 3</option>
                      <option value="XII RPL 1"{{ $edit_pinjam->kelas === 'XII RPL 1' ? 'selected' : '' }}>XII RPL 1</option>
                      <option value="XII RPL 2"{{ $edit_pinjam->kelas === 'XII RPL 2' ? 'selected' : '' }}>XII RPL 2</option>
                      <option value="XIII AK 1"{{ $edit_pinjam->kelas === 'XIII AK 1' ? 'selected' : '' }}>XIII AK 1</option>
                      <option value="XIII AK 2"{{ $edit_pinjam->kelas === 'XIII AK 2' ? 'selected' : '' }}>XIII AK 2</option>
                      <option value="XIII AK 3"{{ $edit_pinjam->kelas === 'XIII AK 3' ? 'selected' : '' }}>XIII AK 3</option>
                      <option value="XIII AK 4" {{ $edit_pinjam->kelas === 'XIII AK 4' ? 'selected' : '' }}>XIII AK 4</option>
                      <option value="XIII AK 5"{{ $edit_pinjam->kelas === 'XIII AK 5' ? 'selected' : '' }}>XIII AK 5</option>
                      <option value="XIII AK 6"{{ $edit_pinjam->kelas === 'XIII AK 6' ? 'selected' : '' }}>XIII AK 6</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Tanggal Pinjam</label>
                  <input type="date" name="tanggal_pinjam" id="tgl_pinjam"class="form-control" value="{{ old('tanggal_pinjam', $edit_pinjam->tanggal_pinjam)}}">
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-6">
                      <label for="">Jam Pinjam</label>
                      <input type="time" name="jam_pinjam" id="jam_pinjam" class="form-control" value="{{ old('jam_pinjam', $edit_pinjam->jam_pinjam)}}">
                    </div>
                    <div class="col-lg-6">
                      <label for="">Maks pinjam</label>
                      <input type="time" name="jam_max_pinjam" id="max_pinjam" class="form-control" value="{{ old('jam_max_pinjam', $edit_pinjam->jam_max_pinjam)}}">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="">Phone Number</label>
                  <input type="text " name="nomor_tlp" id="" class="form-control" value="{{ old('nomor_tlp', $edit_pinjam->nomor_tlp)}}">
                </div>
                <div class="form-group">
                  <label for="">Guru Mata Pelajaran</label>
                  <input type="text" name="guru_mapel" class="form-control" value="{{ old('guru_mapel', $edit_pinjam->guru_mapel)}}">
                </div>
                <div class="form-group">
                  <label for="">Keterangan Pinjam</label>
                  <input type="text" name="ket_pinjam" id="" class="form-control" value="{{ old('ket_pinjam', $edit_pinjam->ket_pinjam)}}">
                </div>
                <div class="form-group">
                  <label for="">Petugas</label>
                  <select name="userid" id="userid" class="form-control" value="{{ old('userid', $edit_pinjam->userid)}}">
                    <option value="" selected hidden>Masukkan Petugas</option>
                    @foreach($petugas as $item)
                    <option value="{{ $item->userid }}">{{ $item->username }}</option>
                    @endforeach
                </select>
                </div>
                <div class="form-group">
                  <label for="">Barang</label>
                  <select name="kode_barang" id="" class="form-control" value="{{ old('kode_barang', $edit_pinjam->kode_barang)}}">
                      <option value="" selected hidden>Masukkan Barang</option>
                      @foreach($barang as $item)
                      <option value="{{$item->kode_barang}}">{{$item->nama_barang}}</option>
                      @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Jumlah Pinjam</label>
                  <input type="number" name="jumlah_pinjam" id="" class="form-control" value="{{ old('jumlah_pinjam', $edit_pinjam->jumlah_pinjam)}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-primary">Reset</button>
              </form>
            </div>
          </div>
        </div>
      </div>
</div>


@endsection