<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>X</title>
</head>

<body class="d-flex flex-column bg-light">
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar shadow sticky-top navbar-expand-lg navbar-light ps-3" style="background-color: #A3C7E9">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="#" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                        SMK
                    </a>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item me-3">
                                <a class="btn btn-light" href="#" role="button">logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-dark text-dark sidebar ">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link fw-bold text-light" href="/BiodataGuru">
                                Biodata
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold text-light" href="/UploadGuru">
                                Upload Sertifikat
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold text-light" href="/DaftarSiswa">
                                Daftar Siswa
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold text-light" href="/KelasWali">
                                Kelas wali
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold text-light" href="/Pembimbing">
                                Pembimbingan
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="container mt-5 mb-5">
                    @yield('container')
                </div>
            </main>    
        </div>
    </div>
</body>
</html>