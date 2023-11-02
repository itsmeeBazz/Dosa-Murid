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
    
    <section class="w-screen h-screen relative ">
        <img src="{{ asset('img/background2.jpeg')}}" alt="bg" class="w-screen h-screen object-cover">

        <div class="absolute top-0 left-0 w-screen h-screen bg-black bg-opacity-40 text-center">
            <div class="container mx-auto px-4 h-full flex flex-col justify-center items-center">
                <div class="text-4xl font-bold text-white mb-3">{{ config('app.name', 'Laravel') }}</div>
                <div class="text-xl text-gray-200 mb-6">Masukan nis kamu...dibawah sini...</div>
                <form action="{{ route('result')}}" class="w-full">
                    <div class="flex flex-wrap justify-center">
                        <input type="number" id="nis" name="nis" placeholder="NIS" required
                            class="block w-full max-w-md mb-3 mx-4 p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 ">
                        <button type="submit"
                            class="px-5 py-3 mb-3 text-xl font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">Cari</button>
                        </div>
                </form>
                <form action="{{ route('riwayat')}}" class="w-full">
                    <div class="flex flex-wrap justify-center">
                        <input type="number" id="nis" name="nis" placeholder="NIS" required
                            class="block w-full max-w-md mb-3 mx-4 p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 ">
                        <button type="submit"
                            class="px-5 py-3 mb-3 text-xl font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">Cari</button>
                        </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>