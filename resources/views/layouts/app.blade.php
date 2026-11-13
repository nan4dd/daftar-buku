<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('judul', 'Daftar Buku')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-slate-100 text-slate-800">

    {{-- Navigasi --}}
    <nav class="bg-indigo-700 text-white shadow">
        <div class="max-w-4xl mx-auto px-4 py-4 flex flex-wrap items-center justify-between gap-3">
            <a href="{{ route('buku.index') }}" class="text-xl font-bold">📚 Perpustakaan Mini</a>

            <div class="flex items-center gap-3">
                {{-- @auth hanya tampil untuk pengguna yang sudah login --}}
                @auth
                    <a href="{{ route('buku.create') }}"
                       class="bg-white text-indigo-700 px-4 py-2 rounded-lg font-semibold hover:bg-indigo-50">
                        + Tambah Buku
                    </a>
                    <a href="{{ route('profile.edit') }}" class="hover:underline">{{ Auth::user()->name }}</a>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="text-indigo-100 hover:text-white hover:underline">Keluar</button>
                    </form>
                @endauth

                {{-- @guest hanya tampil untuk pengunjung yang belum login --}}
                @guest
                    <a href="{{ route('login') }}"
                       class="bg-white text-indigo-700 px-4 py-2 rounded-lg font-semibold hover:bg-indigo-50">Masuk</a>
                    <a href="{{ route('register') }}" class="hover:underline">Daftar</a>
                @endguest
            </div>
        </div>
    </nav>

    {{-- Judul halaman dari Breeze (dipakai halaman profil) --}}
    @isset($header)
        <header class="bg-white shadow">
            <div class="max-w-4xl mx-auto px-4 py-6">
                {{ $header }}
            </div>
        </header>
    @endisset

    <main class="max-w-4xl mx-auto px-4 py-8">
        {{-- Pesan sukses (flash message) --}}
        @if (session('sukses'))
            <div class="mb-6 rounded-lg bg-green-100 border border-green-300 text-green-800 px-4 py-3">
                {{ session('sukses') }}
            </div>
        @endif

        {{-- Halaman buku memakai @section('konten'); halaman Breeze memakai <x-app-layout> ($slot) --}}
        @isset($slot)
            {{ $slot }}
        @else
            @yield('konten')
        @endisset
    </main>

    <footer class="text-center text-sm text-slate-500 py-6">
        Dibuat dengan Laravel, Blade &amp; Tailwind CSS
    </footer>

</body>
</html>
