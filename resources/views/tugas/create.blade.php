@extends('layouts.tiger')

@section('content') 
    <div class="container">
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand">Tambahkan List Tugas</a>
            </div>
        </nav>
        <form action="/tugas/store" method="POST">
            @csrf
            <div class="mb-3">
                <label for="inputdetail" class="form-label">Detail Tugas</label>
                <input type="text" name="detail_tugas" class="form-control">
            </div>
            <div class="mb-3">
                <label for="inputmatakuliah" class="form-label">Mata Kuliah</label>
                <input type="text" name="mata_kuliah" class="form-control">
            </div>
            <div class="mb-3">
                <label for="inputwaktupenugasan" class="form-label">Waktu Penugasan</label>
                <input type="text" name="waktu_penugasan" class="form-control">
            </div>
            <div class="mb-3">
                <label for="inputwaktupengumpulan" class="form-label">Waktu Pengumpulan</label>
                <input type="text" name="waktu_pengumpulan" class="form-control">
            </div>
            <select class="form-select" name="progress">
                <option value="">Progress</option>
                <option value="Selesai">Selesai</option>
                <option value="Belum Selesai">Belum Selesai</option>
            </select><br>
            <div class="mb-3">
                <label for="inputketerangan" class="form-label">Keterangan</label>
                <textarea class="form-control" name="keterangan" rows="10"></textarea><br>
            </div>
            <input type="submit" name="submit" class="btn btn-secondary" value="Save">
        </form>
    </div>
@endsection 