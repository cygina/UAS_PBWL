@extends('layouts.app')
@section('content')

<h2>Data Order</h2>

<a href="{{url('order/create')}}" class="btn btn-light mb-3">Add New</a>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>ID CUSTOMER</th>
        <th>ID PRODUK</th>
        <th>QUANTITY</th>
        <th>TANGGAL ORDER</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    @foreach ( $rows as $row )
    <tr>
        <td>{{ $row->id_order }}</td>
        <td>{{ $row->id_customer }}</td>
        <td>{{ $row->id_produk }}</td>
        <td>{{ $row->quantity }}</td>
        <td>{{ $row->orderdate }}</td>
        <td><a href="{{ url('order/edit/' . $row->id_order) }}" class="btn btn-info">Edit</a></td>
        <td>
        <form action="{{ url('order/' . $row->id_order) }}" method="post">
                              <input type="hidden" name="_method" value="DELETE">
                              @csrf
                              <input type="submit" value="Delete" class="btn btn-warning" onclick="return confirm('Are you sure?')">
                        </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
