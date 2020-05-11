<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.css') }}">
</head>
<body>
    <script src="assets/js/jquery.js"></script> 
	<script src="assets/js/popper.js"></script> 
	<script src="assets/js/bootstrap.js"></script>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/">SMK WIKRAMA</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="/ppdb/data1">Data Calon Murid</a></li>
                <li class="nav-item"><a class="nav-link" href="/ppdb/data2">Keterangan Tempat Tinggal</a></li>
                <li class="nav-item"><a class="nav-link" href="/ppdb/data3">Keterangan Kesehatan</a></li>
                <li class="nav-item"><a class="nav-link" href="/ppdb/data4">Data Orang Tua/Wali</a></li>
                <li class="nav-item"><a class="nav-link" href="/ppdb/rapot">Rapot</a></li>
                <li class="nav-item"><a class="nav-link" href="/ppdb/laporan">Laporan</a></li>
            </ul>
        </div>
    </nav>

    <div class="container bg-dark text-light" style="background : rgba(12,12,12,0.3) !important">
        @yield('content')
    </div>
</body>
</html>