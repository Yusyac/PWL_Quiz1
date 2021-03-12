@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Pelanggan</h1>
    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>ID Pelanggan</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>State</th>
            <th>City</th>
            <th>Country</th>
            <th>PostCode</th>
        </tr>
        @foreach ($pelanggans as $daftar)
        <tr>
            <td> {{ $daftar->id}}</td>
            <td> {{ $daftar->name}}</td>
            <td> {{ $daftar->email}}</td>
            <td> {{ $daftar->phone}}</td>
            <td> {{ $daftar->address}}</td>
            <td> {{ $daftar->state}}</td>
            <td> {{ $daftar->city}}</td>
            <td> {{ $daftar->country}}</td>
            <td> {{ $daftar->postcode}}</td>
        </tr>
       @endforeach
   </table>
    <div class="d-flex">
        {{$pelanggans->links()}}
    </div>
</div>
@endsection
