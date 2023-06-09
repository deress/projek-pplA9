@extends('/dashboard_customer/layouts/main_pelanggan')

@section('container')

    <div class="container">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 px-3 my-3" style="background-color: #EFD9D0; border-radius:20px">
            <h1 class="h2">Katalog {{ $cafe->nama_cafe }}</h1>
        </div>

        <div class="row">
            @foreach($katalogs as $katalog)
                <div class="col-md-4 mb-3">
                    <div class="card" style="width:20rem;">
                        <img src="{{ asset('storage/' . $katalog->gambar_fasilitas)  }}" class="card-img-top" alt="" style="max-height:14rem">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="{{ route('cust.katalog.show', $katalog->id) }}" class="text-decoration-none text-dark">{{ $katalog->nama_fasilitas }}</a>
                            </h5>
                            <p>
                                <small class="text-body-secondary">
                                        Harga: Rp {{ $katalog->harga }}/jam
                                </small>
                            </p>
                            <a href="{{ route('cust.katalog.show', $katalog->id) }}" class="btn btn-sm btn-dark" style="background-color: #A85C49">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach()
            <a href="{{ route('cust.home.index') }}" class="text-decoration-none">
                <i class="bi bi-arrow-left"></i> Kembali
            </a>
        </div>
    </div>

@endsection