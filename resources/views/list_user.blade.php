@extends('layouts.app')

@section('content')
<div class="container bg-warning p-5 rounded-bottom-5" style="box-shadow: 0px 0px 50px gray">
    <h1 class="text-center mb-5">List User</h1>
    <a href="{{ route('user.create') }}" class="btn btn-success mb-3">Tambah User</a>
    <table class="table table-sm table-bordered border-secondary">
        <thead class="table-warning">
            <tr class="text-center">
                <th>ID</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($users as $user) { 
            ?> 
            <tr>
                <td class="text-center"><?= $user['id'] ?></td>
                <td><?= $user['nama'] ?></td>
                <td><?= $user['npm'] ?></td>
                <td class="text-center"><?= $user['nama_kelas'] ?></td>
                <td></td>
            </tr>
            <?php 
                } 
            ?> 
            </tbody>
    </table>
</div>
@endsection
