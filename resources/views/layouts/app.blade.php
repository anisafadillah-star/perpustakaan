<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Perpustakaan' }}</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/buku.css') }}">
</head>
<body>

<header>
  <div class="brand">
    <div class="logo">PM</div>
    <div>
      <strong>SMA Puspa Mekar</strong>
      <div class="text-muted small">Perpustakaan Sekolah</div>
    </div>
  </div>

  <nav>
    <a href="/">Beranda</a>
    <a href="{{ route('buku.index') }}">Koleksi Buku</a>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button class="btn btn-sm btn-danger">Logout</button>
    </form>
  </nav>
</header>

<div class="container my-4">
    @yield('content')
</div>

</body>
</html>
