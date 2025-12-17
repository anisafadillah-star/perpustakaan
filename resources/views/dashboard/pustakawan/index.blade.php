<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Petugas | SMA Puspa Mekar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('css/petugas.css') }}">
</head>
<body>

<!-- ================= TOPBAR ================= -->
<header class="topbar">
    <div class="topbar-left">
        <button class="toggle" id="toggleSidebar">☰</button>

        <div class="logo">
            <span class="logo-icon">PM</span>
            <span class="logo-text">SMA Puspa Mekar</span>
        </div>
    </div>

    <div class="topbar-right">
        <div class="date-time">
            {{ now()->translatedFormat('l, d F Y') }}
        </div>

        <div class="profile">
            <div class="avatar">
                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
            </div>
            <div class="profile-info">
                <span class="name">{{ Auth::user()->name }}</span>
                <span class="role">Petugas</span>
            </div>
        </div>
    </div>
</header>

<div class="wrapper">

    <!-- ================= SIDEBAR ================= -->
    <aside class="sidebar" id="sidebar">
        <p class="menu-title">MAIN NAVIGATION</p>

        <a href="#" class="menu active">Dashboard</a>
        <a href="#">Kelola Buku</a>
        <a href="#">Anggota</a>
        <a href="#">Peminjaman</a>
        <a href="#">Pengembalian</a>
        <a href="#">Laporan</a>

        <p class="menu-title">OTHER</p>

        <!-- LOGOUT -->
        <form action="{{ route('logout') }}" method="POST" class="logout-form">
            @csrf
            <button type="submit" class="sidebar-logout">
                 Logout
            </button>
        </form>
    </aside>

    <!-- ================= CONTENT ================= -->
    <main class="content" id="content">
        <h1>Dashboard Petugas</h1>
        <p class="muted">
            Selamat datang kembali, <strong>{{ Auth::user()->name }}</strong>
        </p>

        <!-- ===== STATISTIC ===== -->
        <div class="stats">
            <div class="stat-card blue">
                <span class="icon">📚</span>
                <div>
                    <p>Total Buku</p>
                    <h2>11</h2>
                </div>
            </div>

            <div class="stat-card yellow">
                <span class="icon">🔄</span>
                <div>
                    <p>Buku Dipinjam</p>
                    <h2>3</h2>
                </div>
            </div>

            <div class="stat-card red">
                <span class="icon">⏰</span>
                <div>
                    <p>Terlambat</p>
                    <h2>4</h2>
                </div>
            </div>

            <div class="stat-card green">
                <span class="icon">👥</span>
                <div>
                    <p>Anggota</p>
                    <h2>100</h2>
                </div>
            </div>
        </div>

        <!-- ===== QUICK ACTION ===== -->
        <div class="menu-grid">
            <a href="#" class="menu-card">📚 Kelola Buku</a>
            <a href="#" class="menu-card">👥 Data Anggota</a>
            <a href="#" class="menu-card">📝 Peminjaman</a>
            <a href="#" class="menu-card">🔄 Pengembalian</a>
            <a href="#" class="menu-card">📊 Laporan</a>
            <a href="#" class="menu-card">🖨️ Cetak Data</a>
        </div>
    </main>
</div>

<!-- ================= SCRIPT ================= -->
<script>
    const toggleBtn = document.getElementById('toggleSidebar');
    const sidebar = document.getElementById('sidebar');
    const content = document.getElementById('content');

    toggleBtn.addEventListener('click', () => {
        sidebar.classList.toggle('hide');
        content.classList.toggle('full');
    });
</script>

</body>
</html>
