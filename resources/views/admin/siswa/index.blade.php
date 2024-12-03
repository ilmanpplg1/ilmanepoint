<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-200">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-blue-400 text-white flex flex-col">
          <div class="p-4 text-center font-bold text-lg border-b border-blue-800">
            E-Point
          </div>
          <nav class="mt-4 space-y-2 flex-1">
            <a href="#" class="flex items-center px-4 py-3 hover:bg-blue-800">
              <span class="material-icons mr-2"></span> Dashboard
            </a>
            <a href="{{ route('siswa.index') }}" class="flex items-center px-4 py-3 hover:bg-blue-800">
              <span class="material-icons mr-2"></span>Data Siswa
            </a>
            <a href="#" class="flex items-center px-4 py-3 hover:bg-blue-800">
              <span class="material-icons mr-2"></span>Data Guru
            </a>
            <a href="#" class="flex items-center px-4 py-3 hover:bg-blue-800">
              <span class="material-icons mr-2"></span>Data pelanggaran
            </a>
            <a href="#" class="flex items-center px-4 py-3 hover:bg-blue-800">
              <span class="material-icons mr-2"></span> Data Point
            </a>
          </nav>
        </aside>

        <main class="flex-1 flex flex-col">
            <header class="bg-blue-300 p-4 flex justify-between items-center shadow">
                <h1 class="text-xl font-semibold text-white">Data Siswa</h1>
               
                <button class="bg-blue-600 px-4 py-2 rounded text-white hover:bg-blue-700">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>
                </button>
              </header><br><br><br>
              
              <form action="" method="get">
        <label for="cari">Cari:</label>
        <input type="text" name="cari" id="cari">
       
    </form>
    
    <br><br>
    <a href="{{ route('admin.dashboard') }}">Menu Utama</a>
    
    <a href="{{ route('siswa.create') }}">Tambah Siswa</a> 
    

    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <div class="overflow-y-auto max-h-96">
    <table border="1" cellspacing="0" cellpadding="10">
      <thead>
            <tr>
                <th class="border px-4 py-2">Foto</th>
                <th class="border px-4 py-2">NIS</th>
                <th class="border px-4 py-2">Nama</th>
                <th class="border px-4 py-2">Email</th>
                <th class="border px-4 py-2">Kelas</th>
                <th class="border px-4 py-2">No. Hp</th>
                <th class="border px-4 py-2">Status</th>
                <th class="border px-4 py-2">Aksi</th>
            </tr>
      </thead>
        <tbody>
            @forelse ($siswas as $siswa)
            <tr >
                <td class="border px-4 py-2"><img src="{{ asset('storage/siswas/' . $siswa->image) }}" alt="Foto {{ $siswa->name }}" width="100">
                </td>
                <td class="border px-4 py-2">{{ $siswa->nis }}</td>
                <td class="border px-4 py-2">{{ $siswa->name }}</td>
                <td class="border px-4 py-2">{{ $siswa->email }}</td>
                <td class="border px-4 py-2">{{ $siswa->tingkatan }} {{ $siswa->jurusan }} {{ $siswa->kelas }}</td>
                <td class="border px-4 py-2">{{ $siswa->hp }}</td>
                
                    @if ($siswa->status == 1)
                        <td class="border px-4 py-2">Aktif</td>
                    @else
                        <td class="border px-4 py-2">Tidak Aktif</td>
                    @endif
                
                <td class="border px-4 py-2">
                    <form onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');" action="{{ route('siswa.destroy', $siswa->id) }}" method="POST">
                        <a href="{{ route('siswa.show', $siswa->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                        <a href="{{ route('siswa.edit', $siswa->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit">HAPUS</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="8">
                    <p>Data tidak ditemukan</p>
                    <a href="{{ route('siswa.index') }}">Kembali!</a>
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
    </div>

    {{ $siswas->links() }}
</body>
</html>




