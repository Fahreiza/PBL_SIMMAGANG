<!-- Header/Navbar -->
<header class="bg-white shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
        <div class="flex-1">
            <a href="index.php">
                <span class="text-blue-700 font-bold text-xl">SIMMAGANG</span>
            </a>
        </div>

        <!-- Center Nav -->
        <nav class="hidden md:flex space-x-6 text-sm text-gray-700 font-medium justify-center flex-1">
            <a href="data_mahasiswa.php" class="hover:text-blue-600">Data Mahasiswa</a>
            <a href="data_pembimbing.php" class="hover:text-blue-600">Pembimbing</a>
            <a href="Job.php" class="hover:text-blue-600">Jobs</a>
            <a href="laporan.php" class="hover:text-blue-600">Laporan</a>
        </nav>

        <!-- Profile Dropdown -->
        <div class="flex-1 flex justify-end relative">
            <button id="profileBtn" class="flex items-center space-x-2 focus:outline-none">
                <img src="https://avatar.iran.liara.run/public" alt="Profile" class="w-8 h-8 rounded-full object-cover" />
                <span class="text-sm font-medium">Admin TI</span>
                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <div id="profileDropdown" class="hidden absolute right-0 mt-2 w-48 bg-white shadow-md rounded-md py-1 z-50">
                <a href="adminProfile.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
                <a href="logout.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</a>
            </div>
        </div>
    </div>
</header>