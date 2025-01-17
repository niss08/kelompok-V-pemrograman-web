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
                        <button class="flex justify-between items-center w-full text-gray-700 hover:text-green-600">
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
                        <button class="flex justify-between items-center w-full text-gray-700 hover:text-green-600">
                            Layanan
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="hidden pl-4 mt-2 space-y-2">
                            <a href="https://classroom.google.com/" class="block text-gray-600 hover:text-green-600">E-Learning</a>
                            <a href="#" class="block text-gray-600 hover:text-green-600">Digital Library</a>
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
                            <a href="https://lppm.sttcipasung.ac.id/" class="block text-gray-600 hover:text-green-600">LPPM</a>
                            <a href="program" class="block text-gray-600 hover:text-green-600">Program</a>
                            <a href="https://www.kemdikbud.go.id/" class="block text-gray-600 hover:text-green-600">Beasiswa</a>
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
                            <a href="https://lppm.sttcipasung.ac.id/" class="block text-gray-600 hover:text-green-600">LPPM</a>
                            <a href="program" class="block text-gray-600 hover:text-green-600">Program</a>
                            <a href="https://www.kemdikbud.go.id/" class="block text-gray-600 hover:text-green-600">Beasiswa</a>
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
 
    <div class="relative w-full h-80 overflow-hidden">
  <!-- Carousel Container -->
  <div id="carousel" class="flex transition-transform duration-500">
    <!-- Slide 1 -->
    <div class="w-full flex-shrink-0 relative">
      <img src="/img/kampus.jpg" alt="Slide 1" class="w-full h-80 object-cover">
      <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col items-center justify-center text-center text-white px-4">
        <h1 class="text-4xl font-bold mb-2">Selamat Datang</h1>
        <p class="text-lg">Kami hadir dengan fasilitas modern untuk mendukung pembelajaran Anda.</p>
      </div>
    </div>
    <!-- Slide 2 -->
    <div class="w-full flex-shrink-0 relative">
      <img src="/img/kampus.jpg" alt="Slide 2" class="w-full h-80 object-cover">
      <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col items-center justify-center text-center text-white px-4">
        <h1 class="text-4xl font-bold mb-2">Fasilitas Lengkap</h1>
        <p class="text-lg">Nikmati perpustakaan, lab komputer, dan ruang kelas yang nyaman.</p>
      </div>
    </div>
    <!-- Slide 3 -->
    <div class="w-full flex-shrink-0 relative">
      <img src="/img/kampus.jpg" alt="Slide 3" class="w-full h-80 object-cover">
      <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col items-center justify-center text-center text-white px-4">
        <h1 class="text-4xl font-bold mb-2">Komunitas Inspiratif</h1>
        <p class="text-lg">Bergabunglah dengan komunitas mahasiswa yang kreatif dan penuh semangat.</p>
      </div>
    </div>
  </div>

  <!-- Navigation Buttons -->
  <button id="prev" class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-gray-800 bg-opacity-50 text-white p-3 rounded-full hover:bg-gray-700 focus:outline-none">
    &#8592;
  </button>
  <button id="next" class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-gray-800 bg-opacity-50 text-white p-3 rounded-full hover:bg-gray-700 focus:outline-none">
    &#8594;
  </button>

  <!-- Slide Indicators -->
  <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
    <span class="indicator w-3 h-3 bg-gray-500 rounded-full"></span>
    <span class="indicator w-3 h-3 bg-gray-500 rounded-full"></span>
    <span class="indicator w-3 h-3 bg-gray-500 rounded-full"></span>
  </div>
</div>




        <!-- Profile Section -->
        <section id="profil" class="bg-gray-50 py-16">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl font-bold text-center mb-8">Profil</h2>
    <div class="grid md:grid-cols-2 gap-8">
      <!-- Visi -->
      <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-xl font-bold mb-4">Visi</h3>
        <p class="text-gray-600">Menjadi perguruan tinggi yang unggul dan terkemuka dalam pengembangan ilmu pengetahuan dan teknologi.</p>
      </div>
      <!-- Misi -->
      <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-xl font-bold mb-4">Misi</h3>
        <p class="text-gray-600">Menyelenggarakan pendidikan tinggi yang berkualitas untuk menghasilkan lulusan yang kompeten dan berakhlak mulia.</p>
      </div>
    </div>

    <!-- Selengkapnya -->
    <div class="text-center mt-8">
      <a href="profile" class="text-blue-500 hover:underline font-medium text-lg">Selengkapnya &raquo;</a>
    </div>
  </div>
</section>


        <!-- Fasilitas Section -->
        <section id="fasilitas" class="bg-white py-16">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-8">Fasilitas</h2>
        <div class="grid md:grid-cols-3 gap-6">
            <!-- Lab Komputer -->
            <div class="bg-gray-50 p-6 rounded-lg shadow text-center">
    <img src="/img/lbkom.jpg" alt="Lab Komputer" class="w-32 h-32 object-cover mx-auto mb-4 rounded-full">
    <h3 class="text-xl font-bold mb-4">Lab Komputer</h3>
    <p class="text-gray-600 my-4">Fasilitas komputer modern untuk menunjang pembelajaran praktikum.</p>
    <a href="labkom" class="text-blue-500 hover:underline">Read More &raquo;</a>
</div>
<!-- Perpustakaan -->
<div class="bg-gray-50 p-6 rounded-lg shadow text-center">
    <img src="/img/perpus.jpg" alt="Perpustakaan" class="w-32 h-32 object-cover mx-auto mb-4 rounded-full">
    <h3 class="text-xl font-bold mb-4">Perpustakaan</h3>
    <p class="text-gray-600 my-4">Koleksi buku lengkap dan ruang baca yang nyaman.</p>
    <a href="perpustakaan" class="text-blue-500 hover:underline">Read More &raquo;</a>
</div>

            <!-- Ruang Kelas -->
            <div class="bg-gray-50 p-6 rounded-lg shadow text-center">
    <img src="/img/kelass.jpg" alt="kelass" class="w-32 h-32 object-cover mx-auto mb-4 rounded-full">
    <h3 class="text-xl font-bold mb-4">Ruang Kelas</h3>
    <p class="text-gray-600 my-4">Koleksi buku lengkap dan ruang baca yang nyaman.</p>
    <a href="kelas" class="text-blue-500 hover:underline">Read More &raquo;</a>
</div>
</section>

<section id="layanan" class="bg-gray-50 py-16">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl font-bold text-center mb-8">Layanan</h2>
    <div class="grid md:grid-cols-2 gap-8">
      <!-- Bimbingan Akademik -->
      <div class="bg-white p-6 rounded-lg shadow text-center">
        <div class="w-32 h-32 mx-auto mb-4 overflow-hidden rounded-full">
          <img src="/img/R.jpg" alt="Bimbingan Akademik" class="w-full h-full object-cover">
        </div>
        <h3 class="text-xl font-bold mb-4">E-Learning</h3>
        <p class="text-gray-600 mb-4">Akses pembelajaran Online</p>
        <a href="https://classroom.google.com/" class="text-blue-500 hover:underline font-medium">Selengkapnya &raquo;</a>
      </div>
      <!-- Beasiswa -->
      <div class="bg-white p-6 rounded-lg shadow text-center">
        <div class="w-32 h-32 mx-auto mb-4 overflow-hidden rounded-full">
          <img src="/img/k.jpg" alt="Beasiswa" class="w-full h-full object-cover">
        </div>
        <h3 class="text-xl font-bold mb-4">Digital Library</h3>
        <p class="text-gray-600 mb-4">Perpustakaan online kampus</p>
        <a href="https://pustaka.sttcipasung.ac.id/" class="text-blue-500 hover:underline font-medium">Selengkapnya &raquo;</a>
      </div>
    </div>
  </div>
</section>



        <!-- Tautan Section -->
        <section id="tautan" class="bg-white py-16">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-8">Tautan</h2>
                <div class="grid md:grid-cols-3 gap-6">
                    <a href="https://lppm.sttcipasung.ac.id/" class="block p-6 bg-gray-50 rounded-lg shadow hover:shadow-md transition-shadow">
                        <h3 class="text-xl font-bold mb-2">LPPM</h3>
                        <p class="text-gray-600">“Mewujudkan Lembaga Penelitian dan Pengabdian kepada Masyarakat STT Cipasung sebagai lembaga yang unggul sehingga menjadi pendorong utama dalam pencapaian Visi dan Misi STT Cipasung”</p>
                    </a>
                    <a href="program" class="block p-6 bg-gray-50 rounded-lg shadow hover:shadow-md transition-shadow">
                        <h3 class="text-xl font-bold mb-2">Program</h3>
                        <p class="text-gray-600">"Klik di sini untuk informasi lengkap <span>Program Studi apa saja yang anda mau.</span>"</p>
                    </a>
                    <a href="https://www.kemdikbud.go.id/" class="block p-6 bg-gray-50 rounded-lg shadow hover:shadow-md transition-shadow">
                        <h3 class="text-xl font-bold mb-2">Beasiswa</h3>
                        <p class="text-gray-600">Program beasiswa untuk mahasiswa berprestasi</p>
                    </a>
                </div>
            </div>
        </section>

<!-- Blog Kampus Section -->
<section class="py-12 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center text-dark-600 mb-10">Blog Kampus</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Blog Post 1 -->
            <div class="flex flex-col h-full bg-white shadow-md rounded-lg overflow-hidden">
                <div class="h-48 w-full overflow-hidden">
                    <img src="/img/OIP.jpg" alt="Kegiatan Mahasiswa" class="w-full h-full object-cover">
                </div>
                <div class="p-4 flex flex-col flex-grow">
                    <h3 class="text-lg font-semibold text-green-600">Kegiatan Mahasiswa Baru</h3>
                    <p class="text-gray-600 text-sm mt-2 flex-grow">Simak bagaimana kegiatan mahasiswa baru di kampus STTC untuk meningkatkan pengalaman belajar mereka.</p>
                    <a href="post1" class="text-blue-500 text-sm mt-4 hover:underline">Baca Selengkapnya</a>
                </div>
            </div>

            <!-- Blog Post 2 -->
            <div class="flex flex-col h-full bg-white shadow-md rounded-lg overflow-hidden">
                <div class="h-48 w-full overflow-hidden">
                    <img src="https://th.bing.com/th/id/OIP.tKDmx8vHJVBjyUQzwA4_igHaE8?w=254&h=180&c=7&r=0&o=5&pid=1.7" alt="Tips Belajar" class="w-full h-full object-cover">
                </div>
                <div class="p-4 flex flex-col flex-grow">
                    <h3 class="text-lg font-semibold text-green-600">Tips Belajar Efektif</h3>
                    <p class="text-gray-600 text-sm mt-2 flex-grow">Dapatkan tips belajar efektif dari dosen dan mahasiswa STTC untuk hasil maksimal.</p>
                    <a href="post2" class="text-blue-500 text-sm mt-4 hover:underline">Baca Selengkapnya</a>
                </div>
            </div>

            <!-- Blog Post 3 -->
            <div class="flex flex-col h-full bg-white shadow-md rounded-lg overflow-hidden">
                <div class="h-48 w-full overflow-hidden">
                    <img src="/img/OIP (1).jpg" alt="Inovasi Teknologi" class="w-full h-full object-cover">
                </div>
                <div class="p-4 flex flex-col flex-grow">
                    <h3 class="text-lg font-semibold text-green-600">Inovasi Teknologi di STTC</h3>
                    <p class="text-gray-600 text-sm mt-2 flex-grow">Cari tahu inovasi teknologi terbaru yang sedang dikembangkan di kampus STTC.</p>
                    <a href="post3" class="text-blue-500 text-sm mt-4 hover:underline">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</section>




        <!-- PMB Online Section -->
        <section id="pmb" class="bg-green-600 text-white py-16">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-3xl font-bold mb-8">PMB Online</h2>
                <p class="mb-8 text-xl">Pendaftaran Mahasiswa Baru dibuka sepanjang tahun</p>
                <button class="bg-white text-green-600 px-8 py-3 rounded-lg font-bold hover:bg-gray-100 transition-colors">
                    Daftar Sekarang
                </button>
            </div>
        </section>
    </main>

    <footer class="bg-gray-900 text-white pt-12 pb-8 ">
  <div class="container mx-auto px-4 ">
    <!-- Top Footer Section -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
      <!-- Column 1 - About -->
      <div class="mb-8 md:mb-0">
        <h3 class="text-xl font-semibold mb-4">STT Cipasung</h3>
        <p class="text-gray-400 mb-4">Sekolah Tinggi Teknologi yang unggul dalam pengembangan ilmu pengetahuan dan teknologi.</p>
        <div class="flex space-x-4">
          <a href="#" class="text-gray-400 hover:text-white">
            <i class="fab fa-facebook"></i>
          </a>
          <a href="#" class="text-gray-400 hover:text-white">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#" class="text-gray-400 hover:text-white">
            <i class="fab fa-instagram"></i>
          </a>
        </div>
      </div>

      <!-- Column 2 - Quick Links -->
      <div>
        <h3 class="text-xl font-semibold mb-4">Quick Links</h3>
        <ul class="space-y-2">
          <li><a href="home" class="text-gray-400 hover:text-white">Home</a></li>
          <li><a href="profile" class="text-gray-400 hover:text-white">Profil</a></li>
          <li><a href="fasilitas" class="text-gray-400 hover:text-white">Fasilitas</a></li>
          <li><a href="layanan" class="text-gray-400 hover:text-white">layanan</a></li>
          <li><a href="program" class="text-gray-400 hover:text-white">Program</a></li>
          <li><a href="blog" class="text-gray-400 hover:text-white">Blog</a></li>
        </ul>
      </div>

      <!-- Column 3 - Programs -->
      <div>
        <h3 class="text-xl font-semibold mb-4">Programs</h3>
        <ul class="space-y-2">
          <li><a href="program" class="text-gray-400 hover:text-white">Teknik Informatika</a></li>
          <li><a href="program" class="text-gray-400 hover:text-white">Teknik Industri</a></li>
        </ul>
      </div>

      <!-- Column 4 - Contact -->
      <div>
        <h3 class="text-xl font-semibold mb-4">Contact Us</h3>
        <ul class="text-gray-400 space-y-2">
          <li class="flex items-start">
            <svg class="w-6 h-6 mr-2 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
            <span>Jl. Cisinga No.KM1, Cilampunghilir, Kec. Padakembang, Kabupaten Tasikmalaya, Jawa Barat 46466</span>
          </li>
          <li class="flex items-center">
            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
            <span>info@sttcipasung.ac.id</span>
          </li>
          <li class="flex items-center">
            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
            </svg>
            <span>(0265) 123456</span>
          </li>
        </ul>
      </div>
    </div>

    <!-- Bottom Footer -->
    <div class="border-t border-gray-800 pt-8">
      <div class="text-center text-gray-400 text-sm">
        <p>&copy; 2024 STT Cipasung. All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>
<script>
  const carousel = document.getElementById('carousel');
  const slides = document.querySelectorAll('#carousel > div');
  const prevButton = document.getElementById('prev');
  const nextButton = document.getElementById('next');
  const indicators = document.querySelectorAll('.indicator');

  let currentIndex = 0;

  function updateCarousel() {
    const offset = -currentIndex * slides[0].clientWidth;
    carousel.style.transform = `translateX(${offset}px)`;
    indicators.forEach((indicator, index) => {
      indicator.classList.toggle('bg-white', index === currentIndex);
      indicator.classList.toggle('bg-gray-500', index !== currentIndex);
    });
  }

  prevButton.addEventListener('click', () => {
    currentIndex = (currentIndex > 0) ? currentIndex - 1 : slides.length - 1;
    updateCarousel();
  });

  nextButton.addEventListener('click', () => {
    currentIndex = (currentIndex < slides.length - 1) ? currentIndex + 1 : 0;
    updateCarousel();
  });

  // Auto-slide every 5 seconds
  setInterval(() => {
    currentIndex = (currentIndex < slides.length - 1) ? currentIndex + 1 : 0;
    updateCarousel();
  }, 5000);
</script>
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