<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Dashboard Internity</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

  <?php include 'navbar.php'; ?>

  <div class="flex flex-col min-h-screen">
    <main class="p-6 max-w-6xl mx-auto w-full">

      <!-- Job Listing -->
      <div class="bg-white p-6 rounded-xl shadow mb-10">
        <?php include 'Job.php'; ?>
      </div>

<!-- Statistik -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
  <div class="bg-white p-6 rounded-xl shadow flex items-center space-x-4">
    <div class="bg-blue-100 text-blue-600 p-3 rounded-full">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round"
          d="M17 20h5v-2a4 4 0 00-4-4h-1M7 20H2v-2a4 4 0 014-4h1m4-4a4 4 0 110-8 4 4 0 010 8zm6 4a4 4 0 100-8 4 4 0 000 8z">
        </path>
      </svg>
    </div>
    <div>
      <p class="text-sm text-gray-500">Total Mahasiswa</p>
      <p class="text-2xl font-bold text-blue-700">120</p>
    </div>
  </div>

  <div class="bg-white p-6 rounded-xl shadow flex items-center space-x-4">
    <div class="bg-green-100 text-green-600 p-3 rounded-full">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round"
          d="M5 13l4 4L19 7"></path>
      </svg>
    </div>
    <div>
      <p class="text-sm text-gray-500">Jumlah Pembimbing</p>
      <p class="text-2xl font-bold text-green-600">8</p>
    </div>
  </div>

  <div class="bg-white p-6 rounded-xl shadow flex items-center space-x-4">
    <div class="bg-purple-100 text-purple-600 p-3 rounded-full">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round"
          d="M3 10h11M9 21V3m8 18h4m-2-18v18">
        </path>
      </svg>
    </div>
    <div>
      <p class="text-sm text-gray-500">Perusahaan</p>
      <p class="text-2xl font-bold text-purple-600">170</p>
    </div>
  </div>

  <div class="bg-white p-6 rounded-xl shadow flex items-center space-x-4">
    <div class="bg-red-100 text-red-600 p-3 rounded-full">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round"
          d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6 6 0 10-12 0v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
        </path>
      </svg>
    </div>
    <div>
      <p class="text-sm text-gray-500">Laporan Masuk</p>
      <p class="text-2xl font-bold text-red-600">24</p>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
  <script>
    const profileBtn = document.getElementById('profileBtn');
    const profileDropdown = document.getElementById('profileDropdown');

    profileBtn?.addEventListener('click', () => {
      profileDropdown.classList.toggle('hidden');
    });

    document.addEventListener('click', (e) => {
      if (!profileBtn.contains(e.target) && !profileDropdown.contains(e.target)) {
        profileDropdown.classList.add('hidden');
      }
    });
  </script>

</body>
</html>
