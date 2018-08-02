<?php

return [

    'boolean' => [
        '0' => 'No',
        '1' => 'Yes',
    ],

    'role' => [
        '0' => 'User',
        '10' => 'Admin BPJS',
        '20' => 'Admin Satker'
    ],

    'status' => [
        '1' => 'Active',
        '0' => 'Inactive',
    ],

    'avatar' => [
        'public' => '/storage/avatar/',
        'folder' => 'avatar',

        'width'  => 400,
        'height' => 400,
    ],

    /*
    |------------------------------------------------------------------------------------
    | ENV of APP
    |------------------------------------------------------------------------------------
    */
    'APP_ADMIN' => 'admin',
    'APP_TOKEN' => env('APP_TOKEN', 'admin123456'),

    'FORM_TEMPLATE' => [
        1 => 'KODE 1 = IDENTITAS.xlsx',
        2 => 'KODE 2 = ALAMAT.xlsx',
        3 => 'KODE 3 = GAJI.xlsx',
        5 => 'KODE 5 = NON AKTIF AKHIR BULAN.xlsx',
        6 => 'KODE 6 = NON AKTIF MENINGGAL.xlsx',
        8 => 'KODE 8 = PINDAH SATUAN KERJA.xlsx',
        9 => 'KODE 9 = NIP.xlsx',
        'FKTP' => 'FKTP = PINDAH FASKES.xlsx',
        'DATA_BARU' => 'DATA BARU.xlsx',
        'TAMBAH_ANGGOTA_KELUARGA_INTI' => 'TAMBAH ANGGOTA KELUARGA INTI.xlsx',
    ],
    'KODE' => [
        'KC' => 1301,
        'DATI2' => 0217
    ],

    'submissions' => [
        'public' => 'storage/submissions/',
        'folder' => 'submissions',
    ],

    'promotional_images' => [
        'public' => 'storage/promotional_images/',
        'folder' => 'promotional_images',
    ],

    'news' => [
        'public' => 'storage/news/',
        'folder' => 'news',
    ],
];
