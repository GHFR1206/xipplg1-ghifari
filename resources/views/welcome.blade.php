@extends('layout.template')
@section('homeact')
    active
@endsection
@section('content')
  
<div class="container">
  <div class="mb-5">
      <center><h1>Selamat Datang!</h1></center>
  </div>

  <div class="card mb-5" style="width: 18rem;">
      <div class="card-body">
          <h5 class="card-title">Produk</h5>
          <p class="card-text">Kunjungi Daftar Produk Kami !</p>
          <a href="/product" class="card-link">Klik Disini !</a>
      </div>
    </div>
</div>
 
@endsection