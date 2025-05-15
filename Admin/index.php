<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard SIMMAGANG</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-blue-50 text-gray-800">

<!-- Header/Navbar -->
<header class="bg-white shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center h-16">
        <!-- Logo and Nav -->
        <div class="flex items-center space-x-4">
            <span class="text-blue-700 font-bold text-xl">SIMMAGANG</span>
            <nav class="hidden md:flex space-x-6 text-sm text-gray-700 font-medium">
                <a href="#" class="hover:text-blue-600">Data Mahasiswa</a>
                <a href="#" class="hover:text-blue-600">Pembimbing</a>
                <a href="#" class="hover:text-blue-600">Laporan</a>
                <a href="#" class="hover:text-blue-600">Pengaturan</a>
            </nav>
        </div>

        <!-- Profile Dropdown -->
        <div class="relative">
            <button id="profileBtn" class="flex items-center space-x-2 focus:outline-none">
                <img src="https://via.placeholder.com/32" alt="Profile" class="w-8 h-8 rounded-full object-cover" />
                <span class="text-sm font-medium">Admin TI</span>
                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" stroke-width="2"
                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <div id="profileDropdown" class="hidden absolute right-0 mt-2 w-48 bg-white shadow-md rounded-md py-1 z-50">
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</a>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="flex flex-col min-h-screen">
    <main class="p-6 max-w-7xl mx-auto w-full">

        <!-- Heading Section -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
            <div class="col-span-2">
                <h1 class="text-xl font-bold text-blue-800 mb-2">Augue aliquam quis sodales tempor donec. Nulla malesuada dui fermentum rhoncus feugiat ac aliquam.</h1>
                <p class="text-sm text-gray-600">Lorem ipsum dolor sit amet consectetur.</p>
            </div>
            <div class="w-full h-28 bg-gray-300 rounded-lg"></div>
        </div>

        <!-- Info Boxes -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-6">
            <div class="bg-white p-6 rounded-xl text-center shadow">
                <p class="text-2xl font-bold text-blue-600">10</p>
                <p class="text-sm text-gray-700 mt-1">Perusahaan</p>
            </div>
            <div class="bg-white p-6 rounded-xl text-center shadow">
                <p class="text-2xl font-bold text-blue-600">15</p>
                <p class="text-sm text-gray-700 mt-1">Lowongan</p>
            </div>
            <div class="bg-white p-6 rounded-xl text-center shadow">
                <p class="text-2xl font-bold text-blue-600">10</p>
                <p class="text-sm text-gray-700 mt-1">Pendaftar</p>
            </div>
        </div>

        <!-- Recent Absence Table -->
        <div class="bg-white p-6 rounded-xl shadow mb-6">
            <h2 class="font-semibold text-gray-700 mb-4">Recent Absence</h2>
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-600">
                    <thead class="text-xs text-gray-500 uppercase border-b">
                    <tr>
                        <th class="px-4 py-2">No</th>
                        <th class="px-4 py-2">Nama</th>
                        <th class="px-4 py-2">Tanggal</th>
                        <th class="px-4 py-2">Waktu</th>
                        <th class="px-4 py-2">Deskripsi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td colspan="5" class="text-center px-4 py-6 text-gray-400">No data available</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Program Studi and Recent User -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-10">
            <!-- Program Studi -->
            <div class="bg-white p-6 rounded-xl shadow">
                <h2 class="font-semibold text-gray-700 mb-4">Program Studi</h2>

                <div class="mb-4">
                    <p class="text-sm font-medium text-gray-700">Teknik Informatika</p>
                    <p class="text-xs text-gray-500 mb-1">Diterima</p>
                    <div class="w-full bg-gray-200 rounded-full h-3 mb-2">
                        <div class="bg-blue-600 h-3 rounded-full" style="width: 75%"></div>
                    </div>
                    <p class="text-xs text-gray-500 mb-1">Ditolak</p>
                    <div class="w-full bg-gray-200 rounded-full h-3">
                        <div class="bg-gray-400 h-3 rounded-full" style="width: 25%"></div>
                    </div>
                </div>

                <div>
                    <p class="text-sm font-medium text-gray-700">Sistem Informasi Bisnis</p>
                    <p class="text-xs text-gray-500 mb-1">Diterima</p>
                    <div class="w-full bg-gray-200 rounded-full h-3 mb-2">
                        <div class="bg-blue-600 h-3 rounded-full" style="width: 75%"></div>
                    </div>
                    <p class="text-xs text-gray-500 mb-1">Ditolak</p>
                    <div class="w-full bg-gray-200 rounded-full h-3">
                        <div class="bg-gray-400 h-3 rounded-full" style="width: 25%"></div>
                    </div>
                </div>
            </div>

            <!-- Recent Active User -->
            <div class="bg-white p-6 rounded-xl shadow">
                <h2 class="font-semibold text-gray-700 mb-4">Recent Active User</h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-600">
                        <thead class="text-xs text-gray-500 uppercase border-b">
                        <tr>
                            <th class="px-4 py-2">No</th>
                            <th class="px-4 py-2">Nama</th>
                            <th class="px-4 py-2">Role</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td colspan="3" class="text-center px-4 py-6 text-gray-400">No active users</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </main>

    <!-- Footer -->
    <footer class="bg-white border-t mt-auto">
        <div class="max-w-7xl mx-auto px-4 py-6 grid grid-cols-2 md:grid-cols-5 gap-6 text-sm text-gray-600">
            <div>
                <h3 class="font-semibold mb-2">Pencari kerja</h3>
                <ul>
                    <li><a href="#">Masuk/daftar</a></li>
                    <li><a href="#">Cari loker magang</a></li>
                    <li><a href="#">Cari loker fresh graduate</a></li>
                    <li><a href="#">Tips karir</a></li>
                </ul>
            </div>
            <div>
                <h3 class="font-semibold mb-2">Perusahaan</h3>
                <ul>
                    <li><a href="#">Masuk perusahaan</a></li>
                    <li><a href="#">Pasang loker</a></li>
                    <li><a href="#">Kontak sales</a></li>
                </ul>
            </div>
            <div>
                <h3 class="font-semibold mb-2">Universitas</h3>
                <ul>
                    <li><a href="#">Menjadi partner</a></li>
                    <li><a href="#">Kontak kami</a></li>
                </ul>
            </div>
            <div>
                <h3 class="font-semibold mb-2">Tentang Internity</h3>
                <ul>
                    <li><a href="#">Tentang kami</a></li>
                    <li><a href="#">Karir</a></li>
                    <li><a href="#">Partner</a></li>
                </ul>
            </div>
            <div>
                <h3 class="font-semibold mb-2">Legal</h3>
                <ul>
                    <li><a href="#">Kebijakan privasi</a></li>
                    <li><a href="#">Ketentuan layanan</a></li>
                </ul>
            </div>
        </div>
    </footer>
</div>

<!-- Dropdown JS -->
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
