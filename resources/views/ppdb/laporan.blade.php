@extends('parent.app')
@section('content')
<div class="card text-dark">
    <div class="card-header">
        <strong><h1>Data Calon Siswa-<b>SMK WIKRAMA GARUT</b></h1></strong>
    </div>
    <div class="card-body">
    <table class="table">
        <thead class="bg-dark text-light">
            <tr>
                <th>id</th>
                <th>nama lengkap</th>
                <th>nama panggilan</th>
                <th>jenis kelamin</th>
                <th>tanggal lahir</th>
                <th>agama</th>
                <th>cita</th>
                <th>kandung</th>
                <th>tiri</th>
                <th>angkat</th>
                <th>berat badan</th>
                <th>tinggi badan</th>
                <th>darah</th>
            </tr>
        </thead>
        <tbody class="bg-light">
            @foreach($data1 as $a)
                <tr>
                    <td>{{ $a->id }}</td>
                    <td>{{ $a->nama_lengkap }}</td>
                    <td>{{ $a->nama_panggilan }}</td>
                    <td>{{ $a->jenis_kelamin }}</td>
                    <td>{{ $a->ttl }}</td>
                    <td>{{ $a->agama }}</td>
                    <td>{{ $a->cita }}</td>
                    <td>{{$a->kandung }}</td>
                    <td>{{$a->tiri }}</td>
                    <td>{{ $a->angkat }}</td>
                    <td>{{ $a->berat_badan }}</td>
                    <td>{{ $a->tinggi_badan }}</td>
                    <td>{{ $a->darah }}</td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    <div class="card-footer">

    </div>
</div>
@endsection