@extends('home')
@section('component')
<div class="container-fluid py-4">

      <div class="row">
        <div class="col-12">
          @if(session()->has('success'))
          <div class="alert alert-success">
            {{ session('success') }}
          </div>
          <meta http-equiv="refresh" content="1; url=/dataPinjam">
          @elseif(session()->has('error'))
          <div class="alert alert-danger">
            {{ session('error') }}
          </div>
          @endif
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Data Pinjam Alat</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0 text-center">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Peminjam</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Kelas</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Barang</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">action</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $item)
                    <tr>
                      <td>{{$item->nama_peminjam}}</td>
                      <td>{{$item->kelas}}</td>
                      <td>{{$item->kode_barang}}</td>
                      <td>{{$item->status}}</td>
                      <td>
                        <div class="d-flex list-action justify-content-center">
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-info m-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Info
                      </button>

                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Detail Pinjam Alat</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                                
                              <div class="d-flex flew-col justify-between">Nama Peminjam: {{$item->nama_peminjam}}</div>
                              <div class="d-flex flew-col justify-between">Kelas: {{$item->kelas}}</div>
                              <div class="d-flex flew-col justify-between">Tanggal Pinjam: {{$item->tanggal_pinjam}}</div>
                              <div class="d-flex flew-col justify-between">Jam Pinjam: {{$item->jam_pinjam}}</div>
                              <div class="d-flex flew-col justify-between">Max Pinjam: {{$item->jam_max_pinjam}}</div>
                              <div class="d-flex flew-col justify-between">Nomor Telepon: {{$item->nomor_tlp}}</div>
                              <div class="d-flex flew-col justify-between">Guru Mata Pelajaran: {{$item->guru_mapel}}</div>
                              <div class="d-flex flew-col justify-between">Keterangan Pinjam: {{$item->ket_pinjam}}</div>
                              <div class="d-flex flew-col justify-between">Petugas: {{$item->userid}}</div>
                              <div class="d-flex flew-col justify-between">Barang: {{$item->kode_barang}}</div>
                              <div class="d-flex flew-col justify-between">Jumlah Pinjam: {{$item->jumlah_pinjam}}</div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn bg-gradient-default" data-bs-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <a href="{{ url('edit_pinjam/'.$item->kode_pinjam.'/edit')}}"><button type="button" class="btn btn-primary m-2">Edit</button></a>
                      <a href="/kembali/{{ $item->kode_pinjam}}"><button type="button" class="btn bg-gradient-secondary m-2">Kembali</button></a>
                      
                      </div>
                    </td>
                    </tr>
                  </tbody>
                  @endforeach
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
@endsection