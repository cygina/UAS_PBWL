@extends('layouts.app')
@section('content')

<h2>Edit Data Customer</h2>

<form action="{{ url('customer/' . $row->id_customer) }}" method="post">
    <input type="hidden" name="_method" value="patch">
    @csrf
    <div class="mb-3">
            <label for="">ID</label>
            <input type="text" name="id_customer" id="" class="form-control" value="{{ $row->id_customer }}">
        </div>
        <div class="mb-3">
            <label for="">NAMA</label>
            <input type="text" name="nama" id="" class="form-control" value="{{ $row->nama }}">
        </div>
        <div class="mb-3">
            <label for="">ALAMAT</label>
            <textarea name="alamat" class="form-control" id="" cols="20" rows="5" value="{{ $row->alamat }}"></textarea>
        </div>
        <div class="mb-3">
            <input type="submit" value="UPDATE" class="btn btn-light">
        </div>
</form>
@endsection
