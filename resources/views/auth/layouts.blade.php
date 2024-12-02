<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 11</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Anda bisa menambahkan CSS kustom di sini -->
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <!-- Wrapper dengan flex untuk menengah/memusatkan konten -->
    <div class="flex items-center justify-center min-h-screen">
        <div class="w-full max-w-md bg-white p-0 rounded-lg shadow-lg">
            @yield('content') <!-- Tempat untuk menampilkan bagian konten halaman -->
        </div>
    </div>
</body>
</html>
