@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h2>Profil Pengguna</h2>
            <p>Nama: {{ $user->name }}</p>
            <p>Email: {{ $user->email }}</p>
            <p>Password: {{ $user->email }}</p>
        </div>
    </div>
</div>
@endsection
