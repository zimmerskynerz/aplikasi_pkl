@extends('layouts.master')

@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Surat Izin Praktek</h1>
          </div>

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Daftar Surat Izin Praktek</h4>
                    @if (auth()->user()->level == "kasi")
                      <a href="{{ url("/sip/create") }}" class="btn btn-info">buat baru</a>
                    @endif
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th class="text-center">
                              Nomor
                            </th>
                            <th>Id pendaftaran</th>
                            <th>Id SIP</th>
                            <th>No Rekomendasi</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($sip as $item)
                            <tr>
                              <td> {{ $loop->iteration }} </td>
                              <td>{{ $item->id_daftar }}</td>
                              <td>{{ $item->nomor_sip }}</td>
                              <td>{{ $item->no_rekomendasi }}</td>
                              <td> {{($item->status == 0) ? "belum disetujui": (($item->status == 1) ? "disetujui kabid" : "disetujui kepala")}} </td>
                              <td>
                                @if ($item->status == 0 && auth()->user()->level == "kabid")
                                  <form action="{{ url("/sip/$item->id/accKabid")}}" method="post" style="display:inline">
                                    <button class="btn btn-info btn-sm" type="submit">Acc</button>
                                    @csrf
                                    @method("PUT")
                                  </form>
                                @endif

                                @if ($item->status == 1 && auth()->user()->level == "kepala")
                                  <form action="{{ url("/sip/$item->id/accKepala")}}" method="post" style="display:inline">
                                    <button class="btn btn-info btn-sm" type="submit">Acc</button>
                                    @csrf
                                    @method("PUT")
                                  </form>
                                @endif

                                @if (auth()->user()->level != "pendaftar")
                                  <form action="{{ url("/sip/$item->id")}}" method="post" style="display:inline">
                                    <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                                    @csrf
                                    @method("DELETE")
                                  </form>
                                  <a href="{{ url("/sip/$item->id/edit") }}" class="btn btn-info btn-sm">Edit</a>
                                @endif

                                @if ($item->status == 2)
                                  <a href="{{ url("/sip/$item->id/cetak") }}" class="btn btn-success btn-sm">Cetak</a>
                                @endif
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
@endsection