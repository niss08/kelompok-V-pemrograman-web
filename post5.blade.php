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


    <!-- Rest of your content remains the same -->

    
<header class="container mx-auto px-4 py-6">
        <a href="/blog" class="text-blue-600 hover:underline text-sm">&larr; Back to all posts</a>
        <div class="mt-4 flex items-center">
            <img src="/img/t.jpg" alt="Foto Penulis" class="rounded-full w-10 h-10 mr-3">
            <div>
                <h1 class="text-xl font-semibold">NissaGhotunada</h1>
                <p class="text-sm text-gray-500">12 Januari 2024 &#x2022; Akademik</p>
            </div>
        </div>
    </header>

    <main class="container mx-auto px-4 py-10 mb-20">
        <article class="bg-white p-6 shadow-md rounded-md">
            <h2 class="text-2xl font-bold mb-4">Pengembangan Fasilitas Kampus</h2>
            <p class="text-gray-700 leading-relaxed mb-4">
            STTC terus melakukan pengembangan fasilitas untuk mendukung kegiatan belajar mengajar Kampus ini menghadirkan laboratorium baru dengan teknologi canggih yang memungkinkan mahasiswa dan dosen melakukan penelitian terkini
            </p>
            <p class="text-gray-700 leading-relaxed mb-4">
            Ruang kelas juga dilengkapi dengan teknologi interaktif seperti layar pintar dan kursi ergonomis untuk menciptakan suasana belajar yang lebih nyaman 
            </p>
            <p class="text-gray-700 leading-relaxed">
            Selain itu perpustakaan digital yang terus diperbarui memberikan akses mudah kepada mahasiswa untuk menjelajahi buku dan jurnal secara online
            </p>
        </article>
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
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>

</html>