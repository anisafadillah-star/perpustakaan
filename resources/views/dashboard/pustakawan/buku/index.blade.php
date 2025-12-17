@extends('layouts.app')

@section('content')
<h2 class="judul-halaman">Koleksi Buku</h2>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<button class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#addModal">
    + Tambah Buku
</button>

<div class="table-wrapper">
<table class="table table-striped">
<thead>
<tr>
    <th>ID</th>
    <th>Judul</th>
    <th>Stok</th>
    <th>Status</th>
    <th>Aksi</th>
</tr>
</thead>
<tbody>
@foreach($buku as $b)
<tr>
    <td>{{ $b->id_buku }}</td>
    <td>{{ $b->judul }}</td>
    <td>{{ $b->stok_tersedia }}</td>
    <td>{{ ucfirst($b->status) }}</td>
    <td>
        <form action="{{ route('buku.destroy',$b->id_buku) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm">Hapus</button>
        </form>
    </td>
</tr>
@endforeach
</tbody>
</table>
</div>
@endsection
