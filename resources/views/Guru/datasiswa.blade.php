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
                        <img src="foto/bayuafrizatulrizki.jpg" class="img-fluid rounded-circle" alt="Guru Photo">
                    </div>
                    <div class="col-md-8">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>Nama</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Jenis Kelamin</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Tempat Lahir</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Tanggal Lahir</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Jurusan</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Kelas</th>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="card bg-light mt-5 border-0">
            <div class="card-header col-md-3 bg-primary text-white">
                <h3 class="text-center">Dokumen</h3>
            </div>
            <div class="card-body bg-dark row">
                <div class="text-white col-4 text-center">
                    <iframe src="" height="200"></iframe>
                    <h5>nama file</h5>
                </div>
                <div class="text-white col-4 text-center">
                    <iframe src="" height="200"></iframe>
                    <h5>nama file</h5>
                </div>
                <div class="text-white col-4 text-center">
                    <iframe src="" height="200"></iframe>
                    <h5>nama file</h5>
                </div>
            </div>
        </div>
    </div>
@endsection