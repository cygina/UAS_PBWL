@extends('layouts.app')
@section('content')

<h2>Add Data Produk</h2>

<form action="{{ url('produk') }}" method="post">
    @csrf
        <div class="mb-3">
            <label for="">ID</label>
            <input type="text" name="id_produk" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">NAMA PRODUK</label>
            <input type="text" name="nama_produk" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">HARGA</label>
            <input type="text" name="prince" id="" class="form-control">
        </div>
        <div class="mb-3">
            <input type="submit" value="SAVE" class="btn btn-primary">
        </div>
</form>
@endsection
