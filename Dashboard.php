<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard</title>
  <link href="https://cdn.tailwindcss.com" rel="stylesheet">
  <link href="styles.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">

  <div class="flex h-screen">
    <!-- Sidebar -->
    <aside class="sidebar">
      <h1 class="text-2xl font-bold text-blue-600 mb-10">Internity</h1>
      <nav class="space-y-4">
        <a href="#" class="nav-item-active">🏠 Dashboard</a>
        <a href="#" class="nav-item">📋 Data Mahasiswa</a>
        <a href="#" class="nav-item">👨‍🏫 Pembimbing</a>
        <a href="#" class="nav-item">📝 Laporan</a>
        <a href="#" class="nav-item">⚙️ Pengaturan</a>
      </nav>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col">
      <!-- Header -->
      <header class="header">
        <h2 class="text-xl font-semibold">Dashboard</h2>
        <div class="flex items-center space-x-4">
          <span class="text-sm text-gray-600">Admin TI</span>
          <img src="https://i.pravatar.cc/40" class="rounded-full w-8 h-8" alt="profile" />
        </div>
      </header>

      <!-- Content -->
      <main class="p-6 space-y-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          <div class="card">
            <h3 class="card-title">Total Mahasiswa</h3>
            <p class="card-number text-blue-600">120</p>
          </div>
          <div class="card">
            <h3 class="card-title">Pembimbing</h3>
            <p class="card-number text-green-600">8</p>
          </div>
          <div class="card">
            <h3 class="card-title">Laporan Masuk</h3>
            <p class="card-number text-purple-600">24</p>
          </div>
        </div>

        <div class="bg-white p-6 rounded-xl shadow">
          <h3 class="text-xl font-bold mb-4">Aktivitas Terbaru</h3>
          <ul class="space-y-2">
            <li>✅ Mahasiswa baru ditambahkan: <strong>Rian Pratama</strong></li>
            <li>📥 Laporan magang dari <strong>Dian Ayu</strong> diterima</li>
            <li>👨‍🏫 Pembimbing <strong>Pak Budi</strong> telah menilai laporan</li>
          </ul>
        </div>
      </main>
    </div>
  </div>

</body>
</html>
