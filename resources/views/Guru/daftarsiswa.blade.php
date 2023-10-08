@extends('Guru.navbarguru')
@section('container')
<div class="container mt-5">
    <div class="container-fluid">
        <h2>Daftar Siswa</h2>
        <div class="row">
            <div class="col-md-2">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Pilih Kelas</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
            <div class="col-md-2">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Pilih Jurusan</option>
                    <option value="1">A</option>
                    <option value="2">B</option>
                    <option value="3">C</option>
                </select>
            </div>
            <div class="col-md-4 offset-md-4">
                <form action="" method="get">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari Siswa" aria-label="Cari Siswa" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Cari</button>
                    </div>
                </form>
            </div>
        </div>    
    </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Siswa</th>
                    <th>NISN</th>
                    <th>Kelas</th>
                    <th>jurusan</th>
                    <th>Data</th>
                </tr>
            </thead>
            <tbody>
                <!-- Add more rows for other students -->
            </tbody>
        </table>
    </div>
@endsection