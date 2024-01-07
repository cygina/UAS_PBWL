@extends('layouts.app')
@section('content')

<h2>Data Customer</h2>

<a href="{{url('customer/create')}}" class="btn btn-light mb-3">Add New</a>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>NAMA</th>
        <th>ALAMAT</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    @foreach ( $rows as $row )
    <tr>
        <td>{{ $row->id_customer }}</td>
        <td>{{ $row->nama }}</td>
        <td>{{ $row->alamat }}</td>
        <td><a href="{{ url('customer/edit/' . $row->id_customer) }}" class="btn btn-info">Edit</a></td>
        <td>
        <form action="{{ url('customer/' . $row->id_customer) }}" method="post">
                              <input type="hidden" name="_method" value="DELETE">
                              @csrf
                              <input type="submit" value="Delete" class="btn btn-warning" onclick="return confirm('Are you sure?')">
                        </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection
