@extends('Siswa.navbarsiswa')
@section('container')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="text-start">Biodata</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ $siswa->url_foto }}"class="img-fluid rounded-circle" alt="Guru Photo">
                    </div>
                    <div class="col-md-8">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>Nama</th>
                                    <td>{{ $siswa->Nama }}</td>
                                </tr>
                                <tr>
                                    <th>Jenis Kelamin</th>
                                    <td>{{ $siswa->Jenis_Kelamin }}</td>
                                </tr>
                                <tr>
                                    <th>Tempat Lahir</th>
                                    <td>{{ $siswa->Tempat_Lahir }}</td>
                                </tr>
                                <tr>
                                    <th>Tanggal Lahir</th>
                                    <td>{{ $siswa->Tanggal_Lahir }}</td>
                                </tr>
                                <tr>
                                    <th>Jurusan</th>
                                    <td>{{ $siswa->Jurusan }}</td>
                                </tr>
                                <tr>
                                    <th>Kelas</th>
                                    <td>{{ $siswa->Kelas }}</td>
                                </tr>
                                <tr>
                                    <th>NISN</th>
                                    <td>{{ $siswa->NISN }}</td>
                                </tr>
                                <tr>
                                    <th>Agama</th>
                                    <td>{{ $siswa->Agama }}</td>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <td>{{ $siswa->Alamat }}</td>
                                </tr>
                                <tr>
                                    <th>No Telepon</th>
                                    <td>{{ $siswa->No_Telepon }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ $siswa->Email }}</td>
                                </tr>
                                <tr>
                                    <th>Nama Ayah</th>
                                    <td>{{ $siswa->Nama_Ayah }}</td>
                                </tr>
                                <tr>
                                    <th>Nama Ibu</th>
                                    <td>{{ $siswa->Nama_Ibu }}</td>
                                </tr>
                                <tr>
                                    <th>Pekerjaan Ayah</th>
                                    <td>{{ $siswa->Pekerjaan_Ayah }}</td>
                                </tr>
                                <tr>
                                    <th>Pekerjaan Ibu</th>
                                    <td>{{ $siswa->Pekerjaan_Ibu }}</td>
                                </tr>
                                <tr>
                                    <th>Alamat Orang Tua</th>
                                    <td>{{ $siswa->Alamat_Orang_Tua }}</td>
                                </tr>
                                <tr>
                                    <th>No Telepon Orang Tua</th>
                                    <td>{{ $siswa->No_Telepon_Orang_Tua }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection