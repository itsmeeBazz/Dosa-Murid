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
                <img src="{{ ('img/logo.png')}}" class="rounded-full mb-4" alt="">
            </div>
            <div class=" justify-center text-center">
                @if($siswa == null)
                <div class="text-lg text-center">...:: AKSI TIDAK DITEMUKAN ::...</div>
                @else
                <div class="text-lg font-semibold mb-3">Nama : {{ $siswa->nama}}</div>
                <div class="text-lg font-semibold mb-3">NISN : {{ $siswa->nisn}}</div>
                <div class="text-lg font-semibold mb-3">Kelas : {{ $siswa->kelas->nama_kelas}}</div>
                <div class="text-lg font-semibold mb-3">Jurusan : {{ $siswa->kelas->jurusan->nama_jurusan}}</div>
                <div class="text-lg font-semibold mb-3">Alamat : {{ $siswa->alamat}}</div>

                <div class="relative overflow-x-auto">
                    <table class="w-full text-lg text-left text-gray-700 ">
                        <thead class="text-gray-900 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Kode Pelanggaran
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Pelanggaran
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Keterangan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Hapus..?
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($aksi->ListPelanggaran as $pelanggaran)
                            <tr class="bg-white border-b  ">
                                <td class="px-6 py-4">
                                    {{$pelanggaran->kode_pelanggaran}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$pelanggaran->pelanggaran->nama_pelanggaran}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$pelanggaran->keterangan}}
                                </td>
                                <td class="px-6 py-4">
                        </tr>
                    @endforeach --}}
                @endif
            </div>
        </div>
</body>
</html>