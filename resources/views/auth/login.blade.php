<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - SMA Puspa Mekar</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>

<body>

<div class="container-login" id="container">

    <!-- LOGIN FORM -->
    <div class="form-box login">
        <h2>Login Perpustakaan</h2>

        <form action="{{ route('login.process') }}" method="POST">
            @csrf

            <div class="input-box">
                <i class='bx bxs-user'></i>
                <input type="email" name="email" placeholder="Email" required>
            </div>

            <div class="input-box">
                <i class='bx bxs-lock-alt'></i>
                <input type="password" name="password" placeholder="Password" required>
            </div>

            <div class="input-box">
                <i class='bx bxs-user-check'></i>
                <select name="role" required>
                    <option value="">Pilih Peran</option>
                    <option value="siswa">Siswa</option>
                    <option value="guru">Guru</option>
                    <option value="petugas">Petugas</option>
                </select>
            </div>

            <button type="submit" class="btn">Login</button>
        </form>
        <a href="{{ url('/') }}" class="back-text">Kembali ke Beranda</a>
    </div>

    <!-- REGISTER FORM -->
    <div class="form-box register">
        <h2>Daftar Akun</h2>

        <form action="{{ route('register') }}" method="POST">
            @csrf

            <div class="input-box">
                <i class='bx bxs-user'></i>
                <input type="text" name="username" placeholder="Username" required>
            </div>

            <div class="input-box">
                <i class='bx bxs-envelope'></i>
                <input type="email" name="email" placeholder="Email" required>
            </div>

            <div class="input-box">
                <i class='bx bxs-lock-alt'></i>
                <input type="password" name="password" placeholder="Password" required>
            </div>

            <div class="input-box">
                <i class='bx bxs-user-check'></i>
                <select name="role" required>
                    <option value="">Pilih Peran</option>
                    <option value="siswa">Siswa</option>
                    <option value="guru">Guru</option>
                </select>
            </div>

            <button type="submit" class="btn">Daftar</button>
        </form>
    </div>

    <!-- TOGGLE PANEL -->
    <div class="toggle-panel" id="togglePanel">
        <h3>Halo, Teman!</h3>
        <p>Belum punya akun? Daftar sekarang untuk akses koleksi buku sekolah!</p>
        <button id="toggleBtn">Daftar Sekarang</button>
    </div>

</div>

<script>
    const container = document.getElementById('container');
    const toggleBtn = document.getElementById('toggleBtn');
    const panel = document.getElementById('togglePanel');

    toggleBtn.addEventListener('click', () => {
        container.classList.toggle('active');

        if (container.classList.contains('active')) {
            toggleBtn.textContent = 'Masuk Sekarang';
            panel.querySelector('h3').textContent = 'Selamat Datang Kembali!';
            panel.querySelector('p').textContent = 'Sudah punya akun? Login di sini.';
        } else {
            toggleBtn.textContent = 'Daftar Sekarang';
            panel.querySelector('h3').textContent = 'Halo, Teman!';
            panel.querySelector('p').textContent = 'Belum punya akun? Daftar sekarang!';
        }
    });
</script>

</body>
</html>
