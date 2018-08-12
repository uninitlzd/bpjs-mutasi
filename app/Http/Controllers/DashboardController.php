<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = (Submission::get()->count()) ? Submission::get()->count() : 0 ;
        $dataBeingProcessed = Submission::where('status', Submission::ON_PROGRESS)->get()->count();
        $dataAccepted = Submission::where('status', Submission::APPROVED)->get()->count();
        $dataRejected = Submission::where('status', Submission::REJECTED)->get()->count();

        /*1 => 'IDENTITAS',
        2 => 'ALAMAT',
        3 => 'GAJI',
        5 => 'NON AKTIF AKHIR BULAN',
        6 => 'NON AKTIF MENINGGAL',
        8 => 'PINDAH SATUAN KERJA',
        9 => 'NIP',
        991 => 'DATA BARU',
        992 => 'PINDAH FASKES',
        993 => 'TAMBAH ANGGOTA KELUARGA'*/

        $submissions = Submission::get();
        $presentaseJenis = [
            1 => 0,
            2 => 0,
            3 => 0,
            5 => 0,
            6 => 0,
            8 => 0,
            9 => 0,
            991 => 0,
            992 => 0,
            993 => 0
        ];


        foreach ($presentaseJenis as $key => $value)
        {
            $jumlah = $submissions->where('code', $key)->count();
            if ($data != 0) {
                $presentaseJenis[$key] = ($jumlah / $data) * 100;
            } else {
                $presentaseJenis[$key] = 0;
            }
        }


        return view('admin.dashboard.index', compact('data', 'dataAccepted', 'dataBeingProcessed', 'dataRejected', 'presentaseJenis'));
    }
}
