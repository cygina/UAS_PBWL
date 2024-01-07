@extends('layouts.app')
@section('content')

<h2>Edit Data Order</h2>

<form action="{{ url('order/' . $row->id_order) }}" method="post">
    <input type="hidden" name="_method" value="patch">
    @csrf
        <div class="mb-3">
            <label for="">ID</label>
            <input type="text" name="id_order" id="" class="form-control" value="{{ $row->id_order }}">
        </div>
        <div class="mb-3">
            <label for="">ID CUSTOMER</label>
            <select name="id_customer" id="id_customer" class="form-control" required>
            @foreach ($customer as $Customer)
                <option value="{{ $Customer->id_customer }}">{{$Customer->nama}}</option>
            @endforeach
            </select>
            {{--<input type="text" name="nama" id="" class="form-control">--}}
        </div>
        <div class="mb-3">
            <label for="">ID PRODUK</label>
            <select name="id_produk" id="id_produk" class="form-control" required>
            @foreach ($produk as $Produk)
                <option value="{{ $Produk->id_produk }}">{{$Produk->nama_produk}}</option>
            @endforeach
            </select>
            {{--<input type="text" name="nama_produk" id="" class="form-control">--}}
        </div>
        <div class="mb-3">
            <label for="">QUANTITY</label>
            <input type="text" name="quantity" id="" class="form-control" value="{{ $row->quantity }}">
        </div>
        <div class="mb-3">
            <label for="">TANGGAL ORDER</label>
            <input type="date" name="orderdate" id="" class="form-control" value="{{ $row->orderdate }}">
        </div>
        <div class="mb-3">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
</form>
@endsection
