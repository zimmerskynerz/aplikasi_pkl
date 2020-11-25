@extends('layouts.master')

@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Buat Surat rekomendasi</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Forms</a></div>
              <div class="breadcrumb-item">Advanced Forms</div>
            </div>
          </div>

          <div class="section-body">

            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Surat rekomendasi</h4>
                  </div>
                  <div class="card-body">
                    <form action="{{url("/rekomendasi")}}" method="post">
                    
                    <div class="form-group">
                        <label>Nomor rekomendasi</label>
                        <input name="no_rekomendasi" type="text" class="form-control" required>
                    </div>

                    <div class="form-group">
                    <label>id pendaftaran</label>
                        <select class="form-control" required name="daftar_id">
                            @foreach ($daftar as $item)
                            <option value="{{$item->id}}">{{ $item->id }}</option>    
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>nama</label>
                        <input name="nama" type="text" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>jabatan</label>
                        <input name="jabatan" type="text" class="form-control" required>
                    </div>

                    <div class="form-group">
                      <label>Tempat Tanggal Lahir</label>
                      <input name="ttl" type="text" class="form-control" required>
                  </div>

                    <div class="form-group">
                        <label>alamat praktik</label>
                        <input name="alamat_praktik" type="text" class="form-control" required>
                    </div>
                   
                      <div class="row">
                          <div class="col">
                            <input type="reset" class="btn btn-danger" value="reset">
                          </div>
                          <div class="col">
                            <input type="submit" class="btn btn-info" value="Simpan">
                        </div>
                      </div>
                      @csrf
                    </form> 
                  </div>
                  
                </div>
              </div>

            </div>
          </div>
        </section>
      </div>
@endsection