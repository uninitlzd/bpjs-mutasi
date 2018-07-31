@component('mail::message')
# Selamat Datang di Aplikasi Form Mutasi BPJS, Akun Anda telah berhasil dibuat
Silahkan masuk ke aplikasi dengan informasi berikut:

@component('mail::table')
    |               |                   |
    | ------------- |:-----------------:|
    | Nama          | {{ $user->name }} |
    | Email         | {{ $user->email }}|
    | Password      | {{ $password }}   |
@endcomponent

Terima Kasih,<br>
BPJS
@endcomponent
