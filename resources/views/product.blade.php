@extends('layout/template')

@section('productact')
    active
@endsection

@section('content')


<div class="container">
    <div class="mb-4"><center><h1>List Produk</h1></center></div>

<div class="row g-3 mt-2 mb-2">
    <div class="justify-content-end d-inline">
        <a href="/product/create" class="btn btn-success mb-2 btn-block justify-content-end">Tambah Data</a>
    </div>
    <div class="col-auto">
        <form action="/product" method="GET" class="form-inline">
            <input type="search" name="search" class="form-control" placeholder="">
            <button type="submit" class="btn btn-primary ml-1">Search</button>
        </form>
    </div>
</div>


@if (session('status'))
    <div class="alert alert-success edit">
        {{ session('status') }}
    </div>
@endif

<center>
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Stok</th>
                <th scope="col">Harga</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produk as $index => $prd)
            <tr>
                <th scope="row">{{$index + $produk -> firstItem() }}</th>
                <th scope="row">{{$prd->nama_produk}}</th>
                <th scope="row">{{$prd->stok}}</th>
                <th scope="row">IDR {{$prd->harga}}</th>
                <th scope="row">{{$prd->keterangan}}</th>
                <th>
                    <a href="/edit/{{ $prd->id }}" class="btn btn-warning text-white">Edit</a>
                    <a href="#" class="btn btn-danger delete" data-id="{{ $prd->id }}" data-nama="{{ $prd->nama_produk }}">Delete</a>
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
</center>
    {{ $produk->links() }}
</div>



@endsection
