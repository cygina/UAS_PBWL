@extends('layouts.app')
@section('content')

<h2>Edit Data Produk</h2>

<form action="{{ url('produk/' . $row->id_produk) }}" method="post">
    <input type="hidden" name="_method" value="patch">
    @csrf
    <div class="mb-3">
            <label for="">ID</label>
            <input type="text" name="id_produk" id="" class="form-control" value="{{ $row->id_produk }}">
        </div>
        <div class="mb-3">
            <label for="">NAMA PRODUK</label>
            <input type="text" name="nama_produk" id="" class="form-control" value="{{ $row->nama_produk }}">
        </div>
        <div class="mb-3">
            <label for="">HARGA</label>
            <input type="text" name="prince" id="" class="form-control" value="{{ $row->prince }}">
        </div>
        <div class="mb-3">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
</form>
@endsection
