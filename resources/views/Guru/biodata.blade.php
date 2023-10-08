@extends('Guru.navbarguru')
@section('container')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="text-start">Biodata</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ $guru->ulr_foto }}" class="img-fluid rounded-circle" alt="Guru Photo">
                    </div>
                    <div class="col-md-8">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>Nama</th>
                                    <td>{{ $guru->Nama }}</td>
                                </tr>
                                <tr>
                                    <th>Jenis Kelamin</th>
                                    <td>{{ $guru->Jenis_Kelamin }}</td>
                                </tr>
                                <tr>
                                    <th>Tempat Lahir</th>
                                    <td>{{ $guru->Tempat_Lahir }}</td>
                                </tr>
                                <tr>
                                    <th>Tanggal Lahir</th>
                                    <td>{{ $guru->Tanggal_Lahir }}</td>
                                </tr>
                                <tr>
                                    <th>NIP</th>
                                    <td>{{ $guru->NIP }}</td>
                                </tr>
                                <tr>
                                    <th>Jabatan</th>
                                    <td>{{ $guru->Jabatan }}</td>
                                </tr>
                                <tr>
                                    <th>Status Guru</th>
                                    <td>{{ $guru->Status_Guru }}</td>
                                </tr>
                                <tr>
                                    <th>Agama</th>
                                    <td>{{ $guru->Agama }}</td>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <td>{{ $guru->Alamat }}</td>
                                </tr>
                                <tr>
                                    <th>No Telepon</th>
                                    <td>{{ $guru->No_Telepon }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ $guru->Email }}</td>
                                </tr>
                                <tr>
                                    <th>Awal Tanggal Sertifikat</th>
                                    <td>{{ $guru->Awal_Tanggal_Sertifikat }}</td>
                                </tr>
                                <tr>
                                    <th>Akhir Tanggal Sertifikat</th>
                                    <td>{{ $guru->Akhir_Tanggal_Sertifikat }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection