@extends('admin.default')

@section('page-header')
    Dashboard
@stop

@section('content')

    @if(auth()->user()->isSatker())

        <div class="row mt-4">
            <div class='col-md-8'>
                <div class="row">
                    <div class="col-md-12">
                        <div class="layers bd bgc-white p-20">
                            <div class="layer w-100 mB-10">
                                <h6 class="lh-1">Profil</h6>
                            </div>
                            <div class="layer w-100">
                                <p><b>Nama: </b> {{ auth()->user()->name }}</p>
                                <p><b>Departemen: </b> {{ auth()->user()->satker->departemen->nama }}</p>
                                <p><b>Satuan Kerja: </b> {{ auth()->user()->satker->nama }}
                                    ({{ auth()->user()->satker->kode }})</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-2">
                        <div class="layers bd bgc-white p-20">
                            <div class="layer w-100 mB-10">
                                <h6 class="lh-1">Buat Form Data Mutasi</h6>
                            </div>
                            <div class="layer w-100">
                                <form action="{{ route('admin.form.new.mutation') }}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="">Jenis Mutasi</label>
                                            <select name="jenis" id="" class="form form-control">
                                                <option value="1">Identitas</option>
                                                <option value="2">Alamat</option>
                                                <option value="3">Gaji</option>
                                                <option value="5">Non Aktif Akhir Bulan</option>
                                                <option value="6">Non Aktif Meninggal</option>
                                                <option value="8">Pindah Satuan Kerja</option>
                                                <option value="9">NIP</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="">Jumlah Data</label>
                                            <input type="number" min="1" name="jumlah_data" value="1" id=""
                                                   class="form-control">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="">&ensp;</label>
                                            <button class="form-control btn btn-primary">
                                                Buat
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class='col-md-4'>
                <div class="row">
                    <div class="col-md-12">
                        <div class="layers bd bgc-white p-20">
                            <div class="layer w-100 mB-10">
                                <h6 class="lh-1">Buat Form Data Baru</h6>
                            </div>
                            <div class="layer w-100">
                                <form action="{{ route('admin.form.new') }}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button href="" class="form-control btn btn-primary c-white">
                                                Buat
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-2">
                        <div class="layers bd bgc-white p-20">
                            <div class="layer w-100 mB-10">
                                <h6 class="lh-1">Buat Form Pindah Faskes</h6>
                            </div>
                            <div class="layer w-100">
                                <form action="{{ route('admin.form.new.fktp') }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button class="form-control btn btn-primary c-white">
                                                Buat
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-2">
                        <div class="layers bd bgc-white p-20">
                            <div class="layer w-100 mB-10">
                                <h6 class="lh-1">Buat Form Tambah Anggota Keluarga Inti</h6>
                            </div>
                            <div class="layer w-100">
                                <form action="{{ route('admin.form.new.tambah_anggota_keluarga_inti') }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button class="form-control btn btn-primary c-white">
                                                Buat
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @else

        <div class="row">
            <div class="col-md-12">
                <div class="layers bd bgc-white p-20 mb-5">
                    <div class="layer w-100">
                        <div class="row">
                            <div class="col-md-3 align-self-center">
                                <b>Filter</b>
                            </div>
                            <div class="ml-auto pr-3">
                                <form class="form-inline" method="get">
                                    <label class="sr-only" for="inlineFormInputName2">Bulan</label>
                                    <select name="month" class="form-control mb-2 mr-sm-2" id="">
                                        <option value="1" <?= ($month == 1) ? 'selected' : '' ?>>Januari</option>
                                        <option value="2" <?= ($month == 2) ? 'selected' : '' ?>>Februari</option>
                                        <option value="3" <?= ($month == 3) ? 'selected' : '' ?>>Maret</option>
                                        <option value="4" <?= ($month == 4) ? 'selected' : '' ?>>April</option>
                                        <option value="5" <?= ($month == 5) ? 'selected' : '' ?>>Mei</option>
                                        <option value="6" <?= ($month == 6) ? 'selected' : '' ?>>Juni</option>
                                        <option value="7" <?= ($month == 7) ? 'selected' : '' ?>>Juli</option>
                                        <option value="8" <?= ($month == 8) ? 'selected' : '' ?>>Agustus</option>
                                        <option value="9" <?= ($month == 9) ? 'selected' : '' ?>>September</option>
                                        <option value="10" <?= ($month == 10) ? 'selected' : '' ?>>Oktober</option>
                                        <option value="11" <?= ($month == 11) ? 'selected' : '' ?>>November</option>
                                        <option value="12" <?= ($month == 12) ? 'selected' : '' ?>>Desember</option>
                                    </select>

                                    <label class="sr-only" for="inlineFormInputGroupUsername2">Tahun</label>
                                    <select name="year" class="form-control mb-2 mr-sm-2" id="">
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2021">2022</option>
                                    </select>

                                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <h5>Rekap Jumlah Data Berdasarkan Status</h5>
                <hr>
            </div>
            <div class="col-md-3">
                <div class="layers bd bgc-white p-20">
                    <div class="layer w-100 mB-10"><h6 class="lh-1">Total Data Masuk</h6></div>
                    <div class="layer w-100">
                        <div class="peers ai-sb fxw-nw">
                            <div class="peer mr-auto">
                                <a href="{{ route('admin.submission_history.index') }}" class="btn btn-info btn-sm">Lihat
                                    Data</a>
                            </div>
                            <div class="peer"><span
                                    class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-blue-50 c-blue-500">{{ $data }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="layers bd bgc-white p-20">
                    <div class="layer w-100 mB-10"><h6 class="lh-1">Total Data Sedang Diproses</h6></div>
                    <div class="layer w-100">
                        <div class="peers ai-sb fxw-nw">
                            <div class="peer mr-auto">
                                <a href="{{ route('admin.submission_history.index', ['status' => 1]) }}"
                                   class="btn btn-info btn-sm c-white">Lihat Data</a>
                            </div>
                            <div class="peer"><span
                                    class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-blue-50 c-blue-500">{{ $dataBeingProcessed }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="layers bd bgc-white p-20">
                    <div class="layer w-100 mB-10"><h6 class="lh-1">Total Data Diterima</h6></div>
                    <div class="layer w-100">
                        <div class="peers ai-sb fxw-nw">
                            <div class="peer mr-auto">
                                <a href="{{ route('admin.submission_history.index', ['status' => 2]) }}"
                                   class="btn btn-success btn-sm">Lihat Data</a>
                            </div>
                            <div class="peer"><span
                                    class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-green-50 c-green-500">{{ $dataAccepted }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="layers bd bgc-white p-20">
                    <div class="layer w-100 mB-10"><h6 class="lh-1">Total Data Ditolak</h6></div>
                    <div class="layer w-100">
                        <div class="peers ai-sb fxw-nw">
                            <div class="peer mr-auto">
                                <a href="{{ route('admin.submission_history.index', ['status' => 3]) }}"
                                   class="btn btn-danger btn-sm">Lihat Data</a>
                            </div>
                            <div class="peer"><span
                                    class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-red-50 c-red-500">{{ $dataRejected }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-12">
                <h5>Rekap Jumlah Data Berdasarkan Jenis</h5>
                <hr>
            </div>
            <div class="col-md-3">
                <div class="layers bd bgc-white p-20">
                    <div class="layer w-100 mB-10"><h6 class="lh-1">Mutasi Identitas</h6></div>
                    <div class="layer w-100">
                        <div class="peers ai-sb fxw-nw">
                            <div class="peer"><span
                                    class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-blue-50 c-blue-500">{{ $presentaseJenis[1] }}
                                    %</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="layers bd bgc-white p-20">
                    <div class="layer w-100 mB-10"><h6 class="lh-1">Mutasi Alamat</h6></div>
                    <div class="layer w-100">
                        <div class="peers ai-sb fxw-nw">
                            <div class="peer"><span
                                    class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-blue-50 c-blue-500">{{ $presentaseJenis[2] }}
                                    %</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="layers bd bgc-white p-20">
                    <div class="layer w-100 mB-10"><h6 class="lh-1">Mutasi Gaji</h6></div>
                    <div class="layer w-100">
                        <div class="peers ai-sb fxw-nw">
                            <div class="peer"><span
                                    class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-blue-50 c-blue-500">{{ $presentaseJenis[3] }}
                                    %</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="layers bd bgc-white p-20">
                    <div class="layer w-100 mB-10"><h6 class="lh-1">Non Aktif Akhir Bulan</h6></div>
                    <div class="layer w-100">
                        <div class="peers ai-sb fxw-nw">
                            <div class="peer"><span
                                    class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-blue-50 c-blue-500">{{ $presentaseJenis[5] }}
                                    %</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-3">
                <div class="layers bd bgc-white p-20">
                    <div class="layer w-100 mB-10"><h6 class="lh-1">Non Aktif Meninggal</h6></div>
                    <div class="layer w-100">
                        <div class="peers ai-sb fxw-nw">
                            <div class="peer"><span
                                    class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-blue-50 c-blue-500">{{ $presentaseJenis[6] }}
                                    %</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="layers bd bgc-white p-20">
                    <div class="layer w-100 mB-10"><h6 class="lh-1">Pindah Satker</h6></div>
                    <div class="layer w-100">
                        <div class="peers ai-sb fxw-nw">
                            <div class="peer"><span
                                    class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-blue-50 c-blue-500">{{ $presentaseJenis[8] }}
                                    %</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="layers bd bgc-white p-20">
                    <div class="layer w-100 mB-10"><h6 class="lh-1">NIP</h6></div>
                    <div class="layer w-100">
                        <div class="peers ai-sb fxw-nw">
                            <div class="peer"><span
                                    class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-blue-50 c-blue-500">{{ $presentaseJenis[9] }}
                                    %</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="layers bd bgc-white p-20">
                    <div class="layer w-100 mB-10"><h6 class="lh-1">Pengajuan Data Baru</h6></div>
                    <div class="layer w-100">
                        <div class="peers ai-sb fxw-nw">
                            <div class="peer"><span
                                    class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-blue-50 c-blue-500">{{ $presentaseJenis[991] }}
                                    %</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">

            <div class="col-md-3">
                <div class="layers bd bgc-white p-20">
                    <div class="layer w-100 mB-10"><h6 class="lh-1">Pindah Faskes</h6></div>
                    <div class="layer w-100">
                        <div class="peers ai-sb fxw-nw">
                            <div class="peer"><span
                                    class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-blue-50 c-blue-500">{{ $presentaseJenis[992] }}
                                    %</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="layers bd bgc-white p-20">
                    <div class="layer w-100 mB-10"><h6 class="lh-1">Tambah Anggota Keluarga</h6></div>
                    <div class="layer w-100">
                        <div class="peers ai-sb fxw-nw">
                            <div class="peer"><span
                                    class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-blue-50 c-blue-500">{{ $presentaseJenis[993] }}
                                    %</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    @endif

@endsection
