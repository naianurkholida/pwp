@extends('home')
@section('component')

<div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <a href="pinjam">
            <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">

                    <h5 class="font-weight-bolder">
                      Pinjam Alat
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div></a>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <a href="dataPinjam">
            <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <h5 class="font-weight-bolder">
                      Kembali Alat
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
            </a>
          
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <a href="distribusi">
            <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <h5 class="font-weight-bolder">
                      Distribusi Alat
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
            </a>
          
        </div>
</div>

@endsection