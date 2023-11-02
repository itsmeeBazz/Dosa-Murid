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
<body class="bg-slate-200">
    <div class="bg-blue-500 text-white text-4xl font-bold py-10">
        <div class="conatiner mx-auto text-center">{{ config('app.name', 'Laravel') }}
        </div>
    </div>
    

    <div class="mt-4 bg-white rounded-xl p-4 container mx-auto">
        <div class="text-xl font-semibold mb-3">NIS YANG DIKIRIM :{{ $nis }}</div>
        @if($siswa == null)
            <div class="text-lg text-center">...:: SISWA TIDAK DITEMUKAN ::...</div>
        @else
            <div class="text-lg font-semibold mb-3">Nama : {{ $siswa->nama}}</div>
            <div class="text-lg font-semibold mb-3">NISN : {{ $siswa->nisn}}</div>
            <div class="text-lg font-semibold mb-3">Kelas : {{ $siswa->kelas->nama_kelas}}</div>
            <div class="text-lg font-semibold mb-3">Jurusan : {{ $siswa->kelas->jurusan->nama_jurusan}}</div>
            <div class="text-lg font-semibold mb-3">Alamat : {{ $siswa->alamat}}</div>
    
    
            <form action="{{ route('pelanggaran.store.aksi')}}" method="POST">
                @csrf
                <input type="hidden" name="nis" value="{{ $siswa->nis}}">
                <div class="mb-4">
                    <label for="tanggal" class="block mb-2 text-lg font-medium">Tanggal</label>
                    <input type="date" id="tanggal" name="tanggal"
                        class="bg-gray-50 border border-gray-300 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                </div>
    
    
                <div class="mb-4">
                    <label for="waktu" class="block mb-2 text-lg font-medium">Waktu</label>
                    <input type="time" id="waktu" name="waktu"
                        class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                </div>

                <div class="mb-4">
                    <label for="kode_bk" class="block mb-2 text-sm font-medium text-gray-900">Guru BK</label>
                    <select id="kode_bk" name="kode_bk">
                        <div class="bg-gray-50 border border-gray-300 text-lg focus:ring-blue-500 focus:border-blue-500 block"></div>
                    <option value="" disabled>--- Pilih Guru BK ---</option>
                    @foreach ($guruBK as $bk )
                        <option value="{{$bk->kode_bk}}">{{$bk->nama}}</option>
                        
                    @endforeach
                    </select>
                </div>
    
    
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md px-5 py-2.5 text-center ">Catat
                    Pelanggaran</button>
            </form>
        @endif

    </div>
</body>
</html>