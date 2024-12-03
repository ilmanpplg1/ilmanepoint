<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel 11</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-200">

  <!-- Dashboard Layout -->
  <div class="flex h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-blue-400 text-white flex flex-col">
      <div class="p-4 text-center font-bold text-lg border-b border-blue-800">
        E-Point
      </div>
      <nav class="mt-4 space-y-2 flex-1">
        <a href="#" class="flex items-center px-4 py-3 hover:bg-blue-800">
          <span class="material-icons mr-2">home</span> Dashboard
        </a>
        <a href="{{ route('siswa.index') }}" class="flex items-center px-4 py-3 hover:bg-blue-800">
          <span class="material-icons mr-3">notes</span>Data Siswa
        </a>
        <a href="#" class="flex items-center px-4 py-3 hover:bg-blue-800">
          <span class="material-icons mr-2">notes</span>Data Guru
        </a>
        <a href="#" class="flex items-center px-4 py-3 hover:bg-blue-800">
          <span class="material-icons mr-2">notes</span>Data pelanggaran
        </a>
        <a href="#" class="flex items-center px-4 py-3 hover:bg-blue-800">
          <span class="material-icons mr-2">notes</span> data Point
        </a>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 flex flex-col">
      <!-- Header -->
      <header class="bg-blue-300 p-4 flex justify-between items-center shadow">
        <h1 class="text-xl font-semibold text-white">Dashboard</h1>
        <button class="bg-blue-600 px-4 py-2 rounded text-white hover:bg-blue-700">
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
            </form>
        </button>
      </header>

      <!-- Content Area -->
      <div class="flex-1 p-6 text-center">
        <h1 class="text-xl font-semibold text-blue-900">Welcome to E-Point Dashboard</h1>
        <h2><p class="mt-4 text-blue-700">Here you can view your points.</p></h2>
      </div>
    </main>
  </div>

  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</body>
</html>
