@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Product</h1>
    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>ID Product</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Stock</th>
            <th>Description</th>
            <th>Image</th>
            <th>ID Supplier</th>
        </tr>
        @foreach ($products as $daftar)
        <tr>
            <td> {{ $daftar->id}}</td>
            <td> {{ $daftar->nama}}</td>
            <td> {{ $daftar->harga}}</td>
            <td> {{ $daftar->stock}}</td>
            <td> {{ $daftar->description}}</td>
            <td> {{ $daftar->image}}</td>
            <td> {{ $daftar->supplier_id}}</td>
        </tr>
       @endforeach
   </table>
    <div class="d-flex">
        {{$products->links()}}
    </div>
</div>
@endsection