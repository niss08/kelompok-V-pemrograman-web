



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STT Cipasung</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .dropdown-content {
            display: none;
            position: absolute;
            min-width: 200px;
            z-index: 50;
        }
        
        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>
<body class="bg-gray-100">
<nav class="bg-white shadow-md px-4 py-4 sticky top-0 z-20">
    <div class="flex justify-between items-center">
        <div class="flex items-center">
            <div class="w-20 h-20 flex items-center justify-center">
                <img src="/img/logosttc-removebg-preview.png" alt="Logo STTC" class="w-16 h-16 md:w-16 md:h-16 mr-4">
            </div>
            <div class="ml-2">
                <span class="text-green-600 font-bold text-lg tracking-wide">STT CIPASUNG</span>
                <p class="text-gray-500 text-xs"><i>Higher Education For All</i></p>
            </div>
        </div>

        <!-- Desktop Navigation with Dropdowns -->
        <div class="hidden md:flex items-center space-x-8">
            <a href="home" class="{{request ()-> is ('home') ? 'text-green-700 font-md' : 'hover:text-gray-600'}}">Home</a>
            <a href="profile" class="{{request ()-> is ('profile') ? ' text-green-700 font-md' : ' hover:text-gray-600'}}">Profil</a>
            
            <!-- Fasilitas Dropdown -->
            <div class="dropdown relative">
                <a href="fasilitas" class="{{request ()-> is ('fasilitas') ? ' text-green-700 font-md' : ' hover:text-gray-600'}}">Fasilitas</a>
                <div class="dropdown-content bg-white shadow-lg rounded-md mt-2">
                    <a href="labkom" class="block px-4 py-2 text-green-700 hover:bg-green-50 hover:text-gray-600">Lab Komputer</a>
                    <a href="perpustakaan" class="block px-4 py-2 text-gray-700 hover:bg-green-50 hover:text-green-600">Perpustakaan</a>
                    <a href="kelas" class="block px-4 py-2 text-gray-700 hover:bg-green-50 hover:text-green-600">Ruang Kelas</a>
                </div>
            </div>

            <!-- Layanan Dropdown -->
            <div class="dropdown relative">
                <a href="layanan" class="{{request ()-> is ('layanan') ? 'text-green-700 font-md' : 'hover:text-gray-600'}}">Layanan</a>
                <div class="dropdown-content bg-white shadow-lg rounded-md mt-2">
                    <a href="https://classroom.google.com/" class="block px-4 py-2 text-gray-700 hover:bg-green-50 hover:text-green-600">E-Learning</a>
                    <a href="https://pustaka.sttcipasung.ac.id/" class="block px-4 py-2 text-gray-700 hover:bg-green-50 hover:text-green-600">Digital Library</a>
                </div>
            </div>

            <!-- Tautan Dropdown -->
            <div class="dropdown relative">
                <a href="tautan" class="{{request ()-> is ('tautan') ? 'text-green-700 font-md' : 'hover:text-gray-600'}}">Tautan</a>
                <div class="dropdown-content bg-white shadow-lg rounded-md mt-2">
                    <a href="https://lppm.sttcipasung.ac.id/" class="block px-4 py-2 text-gray-700 hover:bg-green-50 hover:text-green-600">LPPM</a>
                    <a href="program" class="block px-4 py-2 text-gray-700 hover:bg-green-50 hover:text-green-600">Program</a>
                    <a href="https://www.kemdikbud.go.id/" class="block px-4 py-2 text-gray-700 hover:bg-green-50 hover:text-green-600">Beasiswa</a>
                </div>
            </div>

            <!-- PMB Online Dropdown -->
            <div class="dropdown relative">
                <a href="#pmb" class="{{request ()-> is ('tautan') ? 'text-green-700 font-md' : 'hover:text-gray-600'}}">PMB Online</a>
                <div class="dropdown-content bg-white shadow-lg rounded-md mt-2">
                    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-green-50 hover:text-green-600">Pendaftaran</a>
                    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-green-50 hover:text-green-600">Info PMB</a>
                </div>
            </div>

            <div class="w-6 h-4 bg-red-600 relative">
                <div class="absolute top-0 left-0 w-full h-1/2 bg-white"></div>
            </div>
        </div>

        <!-- Mobile Menu Button -->
        <button id="mobile-menu-button" class="md:hidden text-gray-600 hover:text-green-600">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
    </div>
</nav>

<!-- Sidebar -->
<div id="sidebar" class="fixed inset-0 bg-gray-800 bg-opacity-50 z-30 hidden">
    <!-- Your sidebar content goes here -->
</div>



    <!-- Mobile Sidebar with Dropdowns -->
    <div id="mobile-sidebar" class="fixed inset-0 bg-black bg-opacity-50 z-40 md:hidden hidden">
        <div class="fixed right-0 top-0 h-full w-64 bg-white shadow-lg overflow-y-auto">
            <div class="p-4 border-b">
                <div class="flex justify-between items-center">
                    <span class="font-bold text-lg">Menu</span>
                    <button id="close-sidebar" class="text-gray-500 hover:text-gray-700">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="p-4">
                <nav class="space-y-4">
                    <a href="home" class="block text-green-600 hover:text-green-700">Home</a>
                    <a href="profile" class="block text-gray-600 hover:text-green-600">Profil</a>
                    
                    <!-- Mobile Fasilitas Dropdown -->
                    <div class="mobile-dropdown">
                        <button class="flex justify-between items-center w-full text-gray-600 hover:text-green-600">
                            Fasilitas
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="hidden pl-4 mt-2 space-y-2">
                            <a href="labkom" class="block text-gray-600 hover:text-green-600">Lab Komputer</a>
                            <a href="perpustakaan" class="block text-gray-600 hover:text-green-600">Perpustakaan</a>
                            <a href="kelas" class="block text-gray-600 hover:text-green-600">Ruang Kelas</a>
                        </div>
                    </div>

                    <!-- Mobile Layanan Dropdown -->
                    <div class="mobile-dropdown">
                        <button class="flex justify-between items-center w-full text-gray-600 hover:text-green-600">
                            Layanan
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="hidden pl-4 mt-2 space-y-2">
                            <a href="#" class="block text-gray-600 hover:text-green-600">E-Learning</a>
                            <a href="#" class="block text-gray-600 hover:text-green-600">Beasiswa</a>
                        </div>
                    </div>

                    <!-- Mobile Tautan Dropdown -->
                    <div class="mobile-dropdown">
                        <button class="flex justify-between items-center w-full text-gray-600 hover:text-green-600">
                            Tautan
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="hidden pl-4 mt-2 space-y-2">
                            <a href="#" class="block text-gray-600 hover:text-green-600">LPPM</a>
                            <a href="#" class="block text-gray-600 hover:text-green-600">Program</a>
                            <a href="#" class="block text-gray-600 hover:text-green-600">Beasiswa</a>
                        </div>
                    </div>

                    <!-- Mobile PMB Online Dropdown -->
                    <div class="mobile-dropdown">
                        <button class="flex justify-between items-center w-full text-gray-600 hover:text-green-600">
                            PMB Online
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="hidden pl-4 mt-2 space-y-2">
                            <a href="#" class="block text-gray-600 hover:text-green-600">Pendaftaran</a>
                            <a href="#" class="block text-gray-600 hover:text-green-600">Info PMB</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <!-- Rest of your content remains the same -->
    <main>
    <div class="max-w-md mx-auto bg-white shadow-lg rounded-lg p-6  my-10">
    <h1 class="text-2xl font-bold text-center text-gray-800 mb-6">Tautan Utama</h1>
    
    <div class="space-y-4">
      <a href="home" target="_blank" class="block bg-blue-500 hover:bg-blue-600 text-white font-semibold py-3 px-4 rounded-lg text-center">
        Kunjungi Website Resmi
      </a>
      <a href="blog" target="_blank" class="block bg-green-500 hover:bg-green-600 text-white font-semibold py-3 px-4 rounded-lg text-center">
        Baca Blog Kami
      </a>
      <a href="https://www.kemdikbud.go.id/" target="_blank" class="block bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-3 px-4 rounded-lg text-center">
        Beasiswa
      </a>
      <a href="profile" target="_blank" class="block bg-red-500 hover:bg-red-600 text-white font-semibold py-3 px-4 rounded-lg text-center">
        Tentang Kami
      </a>
    </div>

    <footer class="mt-6 text-center text-gray-600 text-sm">
      © 2025 - Dibuat dengan ❤ oleh Kelompok 5
    </footer>
   
    </main>

    <script>
        
        // Mobile menu functionality
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const closeSidebarButton = document.getElementById('close-sidebar');
        const mobileSidebar = document.getElementById('mobile-sidebar');

        mobileMenuButton.addEventListener('click', () => {
            mobileSidebar.classList.remove('hidden');
        });

        closeSidebarButton.addEventListener('click', () => {
            mobileSidebar.classList.add('hidden');
        });

        // Close sidebar when clicking outside
        mobileSidebar.addEventListener('click', (e) => {
            if (e.target === mobileSidebar) {
                mobileSidebar.classList.add('hidden');
            }
        });

        // Mobile dropdowns functionality
        document.querySelectorAll('.mobile-dropdown button').forEach(button => {
            button.addEventListener('click', () => {
                const dropdownContent = button.nextElementSibling;
                dropdownContent.classList.toggle('hidden');
            });
        });
    </script>
</body>
</html>
