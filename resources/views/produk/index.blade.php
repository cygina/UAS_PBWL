@extends('layouts.app')
@section('content')

<h2>Data Produk</h2>

<a href="{{url('produk/create')}}" class="btn btn-light mb-3">Add New</a>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>NAMA PRODUK</th>
        <th>HARGA</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    @foreach ( $rows as $row )
    <tr>
        <td>{{ $row->id_produk }}</td>
        <td>{{ $row->nama_produk }}</td>
        <td>{{ $row->prince }}</td>
        <td><a href="{{ url('produk/edit/' . $row->id_produk) }}" class="btn btn-info">Edit</a></td>
        <td>
        <form action="{{ url('produk/' . $row->id_produk) }}" method="post">
                              <input type="hidden" name="_method" value="DELETE">
                              @csrf
                              <input type="submit" value="Delete" class="btn btn-warning" onclick="return confirm('Are you sure?')">
                        </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection
