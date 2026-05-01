<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chirper - Tugas</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 antialiased">

    <nav class="p-6 flex justify-between items-center max-w-7xl mx-auto">
        <div class="flex items-center gap-2 font-bold text-xl text-gray-800">
            <span class="text-red-500">🐦</span> Chirper
        </div>
        <div class="space-x-4">
            <a href="/login" class="text-gray-600 font-semibold hover:underline">Sign In</a>
            <a href="/register" class="bg-black text-white px-4 py-2 rounded-lg font-semibold shadow-md">Sign Up</a>
        </div>
    </nav>

   <div class="max-w-2xl mx-auto">
    {{-- Memulai perulangan data dari controller --}}
    @foreach ($chirps as $chirp)
        <div class="card bg-base-100 shadow mt-8">
            <div class="card-body">
                <div>
                    {{-- Menampilkan nama penulis --}}
                    <div class="font-semibold">{{ $chirp['author'] }}</div>
                    
                    {{-- Menampilkan isi pesan --}}
                    <div class="mt-1">{{ $chirp['message'] }}</div>
                    
                    {{-- Menampilkan keterangan waktu --}}
                    <div class="text-sm text-gray-500 mt-2">{{ $chirp['time'] }}</div>
                </div>
            </div>
        </div>
    @endforeach
</div>
    </div>

    <footer class="fixed bottom-10 left-0 right-0 flex justify-center">
        <div class="border-2 border-red-600 px-6 py-2 rounded-full text-sm font-bold text-gray-700 bg-white shadow-sm">
            © 2026 Chirper - Built with Laravel and ❤️ by LILI MAHARA (240170120)
        </div>
    </footer>

</body>
</html>