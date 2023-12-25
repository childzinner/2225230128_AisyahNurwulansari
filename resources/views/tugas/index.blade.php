@extends('layouts.tiger')

@section('content')   
    <div class="container">
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand">Daftar Tugas</a>
              <a class="btn btn-dark" href="/tugas/create">Add List</a>
            </div>
          </nav>
        <table class="table table-dark table-hover">
            <tr>
                <th>No. Urut</th>
                <th>Detail Tugas</th>
                <th>Mata Kuliah</th>
                <th>Waktu Penugasan</th>
                <th>Waktu Pengumpulan</th>
                <th>Progress</th>
                <th>Keterangan</th>
                <th>Aktivitas</th>
            </tr>
            @foreach($tugas as $t)
            <tr>
                <td>{{$t->id}}</td>
                <td>{{$t->detail_tugas}}</td>
                <td>{{$t->mata_kuliah}}</td>
                <td>{{$t->waktu_penugasan}}</td>
                <td>{{$t->waktu_pengumpulan}}</td>
                <td>{{$t->progress}}</td>
                <td>{{$t->keterangan}}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a class="btn btn-secondary" href="/tugas/{{$t->id}}/edit">Edit</a>
                        <form action="/tugas/{{$t->id}}" method="POST">
                            @csrf
                            @method('delete')
                            <input class="btn btn-light" type="submit" value="Move to Trash" onclick="confirm('Are you sure want to delete this list?')">
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection