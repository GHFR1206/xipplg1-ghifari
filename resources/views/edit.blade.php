@extends('layout/template')
@section('content')
<div class="container">
  <div class="my-4">  
    <center><h1>Edit Data Produk</h1></center>
  </div>

    <form method="post" action="/update/{{ $data->id }}">
      @csrf
  <div class="form-group">
    <label for="nama_produk"><h5>Nama Produk</h5></label>
    <input type="text" name="nama_produk" class="form-control @error('nama_produk') is-invalid @enderror" id="nama_produk" name="nama_produk" placeholder="Masukkan Nama Produk" value="{{ $data->nama_produk }}">

  @error('nama_produk')
  <div class="invalid-feedback">{{ 'Nama Produk Tidak Boleh Kosong' }}</div>
  @enderror
  </div>
  <div class="form-group">
    <label for="stok"><h5>Stok</h5></label>
    <input type="text" class="form-control @error('stok') is-invalid @enderror" id="stok" name="stok" placeholder="Masukkan Jumlah Stok Produk" value="{{ $data->stok }}">
    @error('stok')
  <div class="invalid-feedback">{{ 'Stok Tidak Boleh Kosong' }}</div>
  @enderror
  </div>
  <div class="form-group">
    <label for="harga"><h5>Harga</h5></label>
    <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" placeholder="Masukkan Harga Produk" value="{{ $data->harga }}">
    @error('harga')
  <div class="invalid-feedback">{{ 'Harga Tidak Boleh Kosong' }}</div>
  @enderror
  </div>
  <div class="form-group">
    <label for="keterangan"><h5>Keterangan</h5></label>
    <input type="text" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" name="keterangan" placeholder="Masukkan Keterangan Produk" value="{{ $data->keterangan }}">
    @error('keterangan')
  <div class="invalid-feedback">{{ 'Keterangan Tidak Boleh Kosong' }}</div>
  @enderror
  </div>
  <button type="submit" class="btn btn-success edit">Kirim Data</button>
</form>
</div>
@endsection