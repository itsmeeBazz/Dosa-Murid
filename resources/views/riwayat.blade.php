<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
<body class="bg-slate-50">
    <input type="hidden" name="nis">
        <div class="bg-blue-500 text-white text-4xl font-bold py-10">
            <div class="mx-10 text-center">{{ config('app.name', 'Laravel') }}
            </div>
        </div>
        <div class="flex justify-center flex-col">
            <div class="img items-center justify-center flex">
                <img src="{{ ('img/kucing.jpg')}}" class="rounded-full h-[9rem] mb-4 mt-4" alt="">
            </div>
            <div class=" justify-center text-center">
                <div class="text-xl font-semibold mb-3">NIS YANG DIKIRIM :{{ $nis }}</div>
                @if($siswa == null)
                <div class="text-lg text-center">...:: AKSI TIDAK DITEMUKAN ::...</div>
                @else
                @php
                    $point = app('App\Http\Controllers\PelanggaranController')->totalPoint($siswa->nis);
                @endphp
                <div class="text-lg font-semibold mb-3">Point Anda : {{ $point}}</div>
                <div class="text-lg font-semibold mb-3">Nama : {{ $siswa->nama}}</div>
                <div class="text-lg font-semibold mb-3">NISN : {{ $siswa->nisn}}</div>
                <div class="text-lg font-semibold mb-3">Kelas : {{ $siswa->kelas->nama_kelas}}</div>
                <div class="text-lg font-semibold mb-3">Jurusan : {{ $siswa->kelas->jurusan->nama_jurusan}}</div>
                <div class="text-lg font-semibold mb-3">Alamat : {{ $siswa->alamat}}</div>

                        <section class="border-solid w-full bg-gray-400">
                            @foreach($siswa->aksi as $aksi)
                            <div class="relative overflow-x-auto">
                                <table class="w-full text-lg text-gray-700 text-center">
                                    <thead class="text-gray-900 uppercase bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-6 py-3">
                                                Kode Aksi
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Kode Pelanggaran
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Pelanggaran
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Keterangan
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($aksi->ListPelanggaran as $list)
                                        <tr class=" ">
                                            <td class="px-6 py-4">
                                                {{$list->kode_aksi}}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{$list->kode_pelanggaran}}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{$list->pelanggaran->nama_pelanggaran}}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{$list->keterangan}}
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @endforeach
                        </section>                
                @endif
            </div>
        </div>
</body>
</html>