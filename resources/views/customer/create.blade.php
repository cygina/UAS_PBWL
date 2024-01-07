@extends('layouts.app')
@section('content')

<h2>Add Data Customer</h2>

<form action="{{ url('customer') }}" method="post">
    @csrf
        <div class="mb-3">
            <label for="">ID</label>
            <input type="text" name="id_customer" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">NAMA</label>
            <input type="text" name="nama" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">ALAMAT</label>
            <textarea name="alamat" class="form-control" id="" cols="20" rows="5"></textarea>
        </div>
        <div class="mb-3">
            <input type="submit" value="SAVE" class="btn btn-primary">
        </div>
</form>
@endsection
