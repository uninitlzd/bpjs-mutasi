@extends('admin.default')

@section('page-header')
Dashboard
@stop

@section('content')
    <div class="row mt-2">
        <div class='col-md-4'>
            <div class="layers bd bgc-white p-20">
                <div class="layer w-100 mB-10">
                    <h6 class="lh-1">Data Mutasi Baru</h6>
                </div>
                <div class="layer w-100">
                    <div class="peers ai-sb fxw-nw">
                        <div class="peer peer-greed">
                            <span id="sparklinedash3"></span>
                        </div>
                        <div class="peer">
                            <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-cyan-50 c-cyan-500">+10%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class='col-md-4'>
            <div class="layers bd bgc-white p-20">
                <div class="layer w-100 mB-10">
                    <h6 class="lh-1">Data Mutasi Diterima</h6>
                </div>
                <div class="layer w-100">
                    <div class="peers ai-sb fxw-nw">
                        <div class="peer peer-greed">
                            <span id="sparklinedash"></span>
                        </div>
                        <div class="peer">
                            <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-green-50 c-green-500">+10%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class='col-md-4'>
            <div class="layers bd bgc-white p-20">
                <div class="layer w-100 mB-10">
                    <h6 class="lh-1">Data Mutasi Ditolak</h6>
                </div>
                <div class="layer w-100">
                    <div class="peers ai-sb fxw-nw">
                        <div class="peer peer-greed">
                            <span id="sparklinedash4"></span>
                        </div>
                        <div class="peer">
                            <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-red-50 c-red-500">+10%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class='col-md-8'>
            <div class="layers bd bgc-white p-20">
                <div class="layer w-100 mB-10">
                    <h6 class="lh-1">Buat Data Mutasi Baru</h6>
                </div>
                <div class="layer w-100">
                    <form action="">
                       <div class="row">
                           <div class="col-md-9">
                               <select name="" id="" class="form form-control">
                                   <option value="1">Identitas</option>
                                   <option value="2">Alamat</option>
                                   <option value="3">Gaji</option>
                                   <option value="5">Non Aktif Akhir Bulan</option>
                                   <option value="6">Non Aktif Meninggal</option>
                                   <option value="8">Pindah Satuan Kerja</option>
                                   <option value="9">NIP</option>
                               </select>
                           </div>
                           <div class="col-md-3">
                               <button class="form-control btn btn-primary">
                                   Buat
                               </button>
                           </div>
                       </div>
                    </form>
                </div>
            </div>
        </div>
        <div class='col-md-4'>
            <div class="layers bd bgc-white p-20">
                <div class="layer w-100 mB-10">
                    <h6 class="lh-1">Buat Form Pindah Faskes</h6>
                </div>
                <div class="layer w-100">
                    <form action="">
                        <div class="row">
                            <div class="col-md-12">
                                <a href="" class="form-control btn btn-primary c-white">
                                    Buat
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
