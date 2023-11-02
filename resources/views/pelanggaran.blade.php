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
<body>

    <div class="bg-blue-500 text-white text-4xl font-bold py-10">
        <div class="conatiner mx-auto text-center">{{ config('app.name', 'Laravel') }}
        </div>
    </div>
    

    <div class="mt-4 bg-white rounded-xl p-4 container mx-auto">
        <div class="text-xl font-semibold mb-3">KODE AKSI Pelanggaran :{{ $kode_aksi }}</div>
        @if($siswa == null)
            <div class="text-lg text-center">...:: AKSI TIDAK DITEMUKAN ::...</div>
        @else
            <div class="text-lg font-semibold mb-3">Nama : {{ $siswa->nama}}</div>
            <div class="text-lg font-semibold mb-3">NISN : {{ $siswa->nisn}}</div>
            <div class="text-lg font-semibold mb-3">Kelas : {{ $siswa->kelas->nama_kelas}}</div>
            <div class="text-lg font-semibold mb-3">Jurusan : {{ $siswa->kelas->jurusan->nama_jurusan}}</div>
            <div class="text-lg font-semibold mb-3">Alamat : {{ $siswa->alamat}}</div>
            <div class="text-lg font-semibold mb-3">Tanggal : {{ $aksi->tanggal}}</div>
            <div class="text-lg font-semibold mb-3">Waktu : {{ $aksi->waktu}}</div>
            <div class="text-lg font-semibold mb-3">Guru BK : {{ $aksi->guruBK->nama}}</div>

            <form action="{{ route('pelanggaran.add.aksi', $kode_aksi)}}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="kode_pelanggaran" class="block mb-2 text-sm font-medium text-gray-900">Pelanggaran</label>
                    <select id="kode_pelanggaran" name="kode_pelanggaran">
                        <div class="bg-gray-50 border border-gray-300 text-lg focus:ring-blue-500 focus:border-blue-500 block"></div>
                    <option value="" disabled selected>--- Pilih Pelanggaran ---</option>
                    @foreach ($pelanggaranAll as $pelanggaran )
                        <option value="{{$pelanggaran->kode_pelanggaran}}">{{$pelanggaran->nama_pelanggaran}}</option>
                    @endforeach
                    </select>
                </div>
                
                
                <div class="mb-4">
                    <label for="keterangan" class="block mb-2 text-lg font-medium">Keterangan</label>
                    <input type="text" id="keterangan" name="keterangan" placeholder="keterangan"
                        class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                </div>

                <button type="submit"
                    class="text-white mb-4 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md px-5 py-2.5 text-center ">Tambah
                    Pelanggaran</button>
            </form>

            <form action="{{route('pelanggaran.print')}}" method="POST">
                @csrf
                <input type="hidden" name="kode_aksi" value="{{$kode_aksi}}">
                <button type="submit"
                    class="text-white mb-4 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md px-5 py-2.5 text-center ">Cetak
                    </button>
            </form>

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
                        @foreach ($aksi->ListPelanggaran as $pelanggaran)
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

                                <form action="{{ route('pelanggaran.remove.aksi', $kode_aksi)}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id_list" value="{{ $pelanggaran->id}}">
                                    <button type="submit"
                                    class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
            
    </div>
</body>
</html>