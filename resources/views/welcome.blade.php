@extends('layouts.app')

@section('body')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Harga</th>
        <th scope="col">Stok</th>
        <th scope="col">Id Supplier</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($barang as $item)
        <tr>
            <th scope="row">{{ $item -> id }}</th>
            <td>{{ $item -> nama_barang }}</td>
            <td>{{ $item -> harga }}</td>
            <td>{{ $item -> stok }}</td>
            <td>{{ $item -> id_supplier}}</td>
          </tr>
        @endforeach
    </tbody>
  </table>
@endsection