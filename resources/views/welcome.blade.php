<!doctype html>
<html lang="id">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />

  <title>SMA Puspa Mekar</title>
  <meta name="description"
    content="Landing page responsif untuk perpustakaan SMA - koleksi, layanan, pengumuman, galeri." />

  <!-- CSS -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
</head>

<body>

  <!-- HEADER -->
  <header>
    <div class="brand">
      <div class="logo">PM</div>
      <div>
        <div style="font-weight:700">SMA Puspa Mekar</div>
        <div class="muted-small">Perpustakaan Sekolah</div>
      </div>
    </div>

    <nav>
      <a href="{{ url('/') }}">Beranda</a>
      <a href="{{ route('login') }}">Koleksi Buku</a>
      <a href="{{ route('login') }}">Peminjaman</a>
      <a href="#tentang">Tentang</a>
      <a href="#kontak">Kontak</a>

      <!-- Tombol login utama -->
      <a class="btn" href="{{ route('login') }}">Login</a>
    </nav>

    <!-- Mobile menu -->
    <div class="mobile-menu">
      <button id="menuBtn" aria-label="Buka menu" style="background:transparent;border:none;font-size:18px;">
        ☰
      </button>
    </div>

    <!-- Drawer -->
    <div id="drawer" class="drawer" aria-hidden="true">
      <a href="{{ url('/') }}">Beranda</a>
      <a href="{{ route('login') }}">Koleksi Buku</a>
      <a href="{{ route('login') }}">Peminjaman</a>
      <a href="#tentang">Tentang</a>
      <a href="#kontak">Kontak</a>

      <a href="{{ route('login') }}" class="btn" style="margin-top:8px;">Login</a>
    </div>
  </header>

  <div class="wrap">
    <main>

      <!-- HERO -->
      <section class="hero">
        <div>
          <h1>Selamat Datang di<br>Perpustakaan SMA Puspa Mekar</h1>
          <p class="muted">
            Sumber ilmu, ruang belajar, dan kegiatan literasi untuk mendukung pembelajaran siswa dan guru.
          </p>

          <div class="cta">
            <!-- Jika user belum login -> arahkan ke login -->
            <a href="{{ route('login') }}" class="btn">Lihat Koleksi Buku</a>
          </div>
        </div>

        <div class="hero-ill">
          <img src="{{ asset('img/perpus.png') }}" alt="Ilustrasi Perpustakaan" />
        </div>
      </section>

      <!-- KOLEKSI -->
      <section id="koleksi">
        <div class="section-title">
          <h2>Koleksi Buku Unggulan</h2>
          <a href="#" class="small-btn">Lihat Semua</a>
        </div>

        <div class="card-row">

          <article class="book">
            <div class="cover">
              <img src="{{ asset('img/Bumi Manusia.jpg') }}" alt="Bumi Manusia">
            </div>
            <h3>Bumi Manusia</h3>
            <div class="muted">Pramoedya Ananta Toer • Fiksi</div>
          </article>

          <article class="book">
            <div class="cover">
              <img src="{{ asset('img/Dilan 1990.jpg') }}" alt="Dilan 1990">
            </div>
            <h3>Dilan 1990</h3>
            <div class="muted">Pidi Baiq • Fiksi</div>
          </article>

          <article class="book">
            <div class="cover">
              <img src="/img/Filosofi Teras.jpg" alt="Filosofi Teras">
            </div>
            <h3>Filosofi Teras</h3>
            <div class="muted">Henry Manampiring • Non Fiksi</div>
          </article>

          <article class="book">
            <div class="cover">
              <img src="/img/Laskar Pelangi.jpg" alt="Laskar Pelangi">
            </div>
            <h3>Laskar Pelangi</h3>
            <div class="muted">Andrea Hirata • Fiksi</div>
          </article>

          <article class="book">
            <div class="cover">
              <img src="/img/negeri 5 menara.jpg" alt="Negeri 5 Menara">
            </div>
            <h3>Negeri 5 Menara</h3>
            <div class="muted">Ahmad Fuadi • Fiksi</div>
          </article>

        </div>
      </section>

      <!-- LAYANAN -->
      <section id="peminjaman">
        <div class="section-title">
          <h2>Layanan Perpustakaan</h2>
        </div>

        <div class="services">
          <div class="service">
            <h4>Jam Buka</h4>
            <p class="muted">Senin - Jumat, 07:00 — 15:00</p>
          </div>

          <div class="service">
            <h4>Aturan Peminjaman</h4>
            <p class="muted">Siswa dapat meminjam maksimal 3 buku selama 7 hari. Perpanjangan melalui login siswa.</p>
          </div>

          <div class="service">
            <h4>Fasilitas</h4>
            <p class="muted">Ruang baca, komputer katalog, wifi sekolah, pojok diskusi.</p>
          </div>
        </div>
      </section>

      <!-- GALERI -->
      <section id="galeri">
        <div class="section-title">
          <h2>Galeri Foto</h2>
          <a href="#" class="small-btn">Lihat Semua</a>
        </div>

        <div class="gallery">
          <img src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?q=80&w=800&auto=format&fit=crop"
            alt="">
          <img src="https://images.unsplash.com/photo-1512453979798-5ea266f8880c?q=80&w=800&auto=format&fit=crop"
            alt="">
          <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?q=80&w=800&auto=format&fit=crop"
            alt="">
        </div>
      </section>

      <!-- TENTANG -->
      <section id="tentang">
        <div class="section-title">
          <h2>Tentang Perpustakaan</h2>
        </div>

        <div class="about-card">
          <p>
            <strong>Perpustakaan SMA Puspa Mekar</strong> bertujuan menjadi pusat literasi yang mendukung peningkatan
            kualitas pembelajaran, menumbuhkan minat baca, serta menyediakan sumber belajar yang modern dan relevan bagi
            seluruh siswa maupun guru.
          </p>
        </div>
      </section>

    </main>

    <!-- FOOTER -->
    <footer id="kontak">
      <div class="footer-center">
        <strong>SMA Puspa Mekar — Perpustakaan</strong>
        <div class="muted-small">Jl. Palabuhan II, Kabupaten Sukabumi • Telepon: (021) 555-0123</div>
        <div class="muted-small">© 2025 SMA Puspa Mekar · Dibuat untuk tugas & demo</div>
      </div>
    </footer>
  </div>

  <!-- SCRIPT -->
  <script>
    const menuBtn = document.getElementById('menuBtn');
    const drawer = document.getElementById('drawer');

    menuBtn.addEventListener('click', () => {
      drawer.classList.toggle('open');
    });
  </script>

  <!-- SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  @if(session('logout_msg'))
    <script>
      Swal.fire({
        toast: true,
        position: 'bottom-end',
        icon: 'success',
        title: '{{ session('logout_msg') }}',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        background: '#fffafc',
        color: '#374151',
        iconColor: '#f48fb1'
      });
    </script>
  @endif

</body>

</html>