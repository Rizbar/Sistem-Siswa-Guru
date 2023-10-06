@extends('Guru.navbarguru')
@section('container')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="text-start">Upload Sertifikat</h3>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="formFile" class="form-label">Pilih File</label>
                    <input class="form-control" type="file" id="formFile">
                </div>
            </div>
        </div>    
    </div>
@endsection