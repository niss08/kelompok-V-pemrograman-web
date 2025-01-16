<x-layouts.app>
  
  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('img\image.3.jpg') }}" class="d-block w-100" alt="..." style= "width="500" height="600">
        <div class="carousel-caption ">
          <h5>Halaman STTCipasung</h5>
          <p>Nuansa Asri nan Hijau.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('img\64550907_1994445377327600_1951267942528188416_n.jpg') }}" class="d-block w-100" alt="..." style="width="500" height="600">
        <div class="carousel-caption  ">
          <h5>STTCipasung Tempo Doeloe</h5>
          <p>Dari gedung lantai satu hingga sekarang lantai tiga.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('img\467437140_1101680188634041_364979328780930253_n.jpg') }}" class="d-block w-100" alt="..." style="width="500" height="600">
        <div class="carousel-caption " >
          <h5>Foto Bersama</h5>
          <p>Kebersamaan menjadikan kita "Keluarga".</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  
  <div class="container bg-ligt text-dark mt-4 " style="height: 100vh;">
    <div class="row text-center align-items-center ">
      <div class="col-sm-6 "> 
        <img src="{{ asset('img\arti logo.jpg') }}" style="width: 90%; height: 30%;"> 
      </div>
      <div class="col-sm-6 ">
       <h2 style="font-size: medium;">Tentang Kami</h2>
       <p>Sekolah Tinggi Teknologi Cipasung (STT Cipasung) didirikan tahun 1997 dengan bantuan dan arahan dari tim Institut Teknologi Bandung. Sekolah tinggi ini didirikan untuk menjawab tantangan penyediaan tenaga ahli profesional dalam bidang keteknikan yang dibutuhkan oleh masyarakat, khususnya masyarakat di sekitar pesantren dan daerah pinggiran yang selama ini kurang mendapatkan perhatian.</p>
       <a href="/PROFILE/" class="btn btn-primary">Lihat Selengkanya...</a>
      </div>
        
  </x-layouts.app>