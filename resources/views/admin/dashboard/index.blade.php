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
            <div class="col-md-3">
                <div class="layers bd bgc-white p-20">
                    <div class="layer w-100 mB-10"><h6 class="lh-1">Total Data Masuk</h6></div>
                    <div class="layer w-100">
                        <div class="peers ai-sb fxw-nw">
                            <div class="peer"><span
                                    class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-green-50 c-green-500">{{ $data }}</span>
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
                            <div class="peer"><span
                                    class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-green-50 c-green-500">{{ $dataBeingProcessed }}</span>
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
                            <div class="peer"><span
                                    class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-green-50 c-green-500">{{ $dataRejected }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endif

@endsection
