@extends('../parent.app')
<body onload=enabled_text(false);>
@section('content')
<script>
    function enabled_text(status)
    {
        status=!status;
        document.form.nama_wali.disabled = status;
        document.form.ttl_wali.disabled = status;
        document.form.pekerjaan_wali.disabled = status;
        document.form.hubungan_wali.disabled = status;
        document.form.pendidikan_wali.disabled = status;
        document.form.kewarganegaraan_wali.disabled = status;
        document.form.agama_wali.disabled = status;
        document.form.no_wali.disabled = status;
        document.form.email_wali.disabled = status;
    }
</script>
<div class="card text-dark">
<div class="card-header">
    <strong><h1>DATA ORANG TUA/WALI MURID</h1></strong>
</div>
<div class="card-body">
    <form action="/ppdb/data4" method="post" name="form">
        {{ csrf_field() }}
        <div class="form-group">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" name="cek_ayah" id="cek_ayah">
                <label class="custom-control-label" for="cek_ayah">Masih ada</label>
            </div>
            <strong><h3>AYAH</h3></strong>
            <label for="">Nama Ayah</label>
            <input type="text" class="form-control" name="nama_ayah">
            @if($errors->has('nama_ayah'))
                <strong class="text-danger">{{ $errors->first('nama_ayah') }}</strong>
            @endif
            <label for="">Tempat,tanggal lahir</label>
            <input type="text" class="form-control" name="ttl_ayah">
            @if($errors->has('ttl_ayah'))
                <strong class="text-danger">{{ $errors->first('ttl_ayah') }}</strong>
            @endif
            <label for="">pekerjaan</label>
            <input type="text" class="form-control" name="pekerjaan_ayah">
            @if($errors->has('pekerjaan_ayah'))
                <strong class="text-danger">{{ $errors->first('pekerjaan_ayah') }}</strong>
            @endif
            <label for="">pendidikan terakhir</label>
            <input type="text" class="form-control" name="pendidikan_ayah">
            @if($errors->has('pendidikan_ayah'))
                <strong class="text-danger">{{ $errors->first('pendidikan_ayah') }}</strong>
            @endif
            <label for="kewarganegaraan">kewarganegaraan</label>
            <input type="text" class="form-control" name="kewarganegaraan_ayah">
            @if($errors->has('kewarganegaraan_ayah'))
                <strong class="text-danger">{{ $errors->first('kewarganegaraan_ayah') }}</strong>
            @endif
            <label for="agama">agama</label>
            <select name="agama_ayah" class="form-control" id="agama">
                <option value="">--Pilih Agama--</option>
                <option value="islam">islam</option>
                <option value="kristen">kristen</option>
                <option value="katolik">katolik</option>
                <option value="hindu">hindu</option>
                <option value="buddha">buddha</option>
            </select>
                @if($errors->has('agama_ayah'))
                    <h5 class="text-danger">{{ $errors->first('agama_ayah') }}</h5>
                @endif
            <label for="no_ayah">No.Hp/Telepon</label>
            <input type="number" class="form-control" name="no_ayah">
            @if($errors->has('no_ayah'))
                <strong class="text-danger">{{ $errors->first('no_ayah') }}</strong>
            @endif
        </div>
        <div class="form-group">
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" name="cek_ibu" id="cek_ibu">
            <label class="custom-control-label" for="cek_ibu">Masih ada</label>
        </div>
        <strong><h3>IBU</h3></strong>
            <label for="">Nama Ibu</label>
            <input type="text" class="form-control " name="nama_ibu">
            @if($errors->has('nama_ibu'))
                <strong class="text-danger">{{ $errors->first('nama_ibu') }}</strong>
            @endif
            <label for="">Tempat,tanggal lahir</label>
            <input type="text" class="form-control " name="ttl_ibu">
            @if($errors->has('ttl_ibu'))
                <strong class="text-danger">{{ $errors->first('ttl_ibu') }}</strong>
            @endif
            <label for="">pekerjaan</label>
            <input type="text" class="form-control " name="pekerjaan_ibu">
            @if($errors->has('pekerjaan_ibu'))
                <strong class="text-danger">{{ $errors->first('pekerjaan_ibu') }}</strong>
            @endif
            <label for="">pendidikan terakhir</label>
            <input type="text" class="form-control " name="pendidikan_ibu">
            @if($errors->has('pendidikan_ibu'))
                <strong class="text-danger">{{ $errors->first('pendidikan_ibu') }}</strong>
            @endif
            <label for="kewarganegaraan">kewarganegaraan</label>
            <input type="text" class="form-control" name="kewarganegaraan_ibu">
            @if($errors->has('kewarganegaraan_ibu'))
                <strong class="text-danger">{{ $errors->first('kewarganegaraan_ibu') }}</strong>
            @endif
            <label for="agama">agama</label>
            <select name="agama_ibu" class="form-control" id="agama">
                <option value="">--Pilih Agama--</option>
                <option value="islam">islam</option>
                <option value="kristen">kristen</option>
                <option value="katolik">katolik</option>
                <option value="hindu">hindu</option>
                <option value="buddha">buddha</option>
            </select>
                @if($errors->has('agama_ibu'))
                    <h5 class="text-danger">{{ $errors->first('agama_ibu') }}</h5>
                @endif
            <label for="no_ibu">No.Hp/Telepon</label>
            <input type="number" class="form-control" name="no_ibu">
            @if($errors->has('no_ibu'))
                <strong class="text-danger">{{ $errors->first('no_ibu') }}</strong>
            @endif
        </div>
        <div class="form-group">
        <strong><h3>WALI</h3></strong>
            <div class="custom-control custom-checkbox">
                <input id="cek_wali" type="checkbox" name="cek_wali" class="custom-control-input" onClick="enabled_text(this.checked)">
                <label class="custom-control-label" for="cek_wali">Wali</label>
            </div>
            <label for="">Nama Wali</label>
            <input type="text" class="form-control" name="nama_wali">
            <label for="">Tempat,tanggal lahir</label>
            <input type="text" class="form-control" name="ttl_wali">
            <label for="">pekerjaan</label>
            <input type="text" class="form-control" name="pekerjaan_wali">
            <label for="">pendidikan terakhir</label>
            <input type="text" class="form-control" name="pendidikan_wali">
            <label for="kewarganegaraan">kewarganegaraan</label>
            <input type="text" class="form-control" name="kewarganegaraan_wali">
            <label for="agama">agama</label>
            <select name="agama_wali" class="form-control" id="agama">
                <option value="">--Pilih Agama--</option>
                <option value="islam">islam</option>
                <option value="kristen">kristen</option>
                <option value="katolik">katolik</option>
                <option value="hindu">hindu</option>
                <option value="buddha">buddha</option>
            </select>
                @if($errors->has('agama'))
                    <h5 class="text-danger">{{ $errors->first('agama') }}</h5>
                @endif
            <label for="no">No.Hp/Telepon</label>
            <input type="text" class="form-control" name="no_wali">
            <label for="">Hubungan murid</label>
            <input type="text" class="form-control" name="hubungan_wali">
            <label for="">alamat email</label>
            <input type="text" class="form-control" name="email_wali">
        
</div>
<div class="card-footer">
<center>
    <a href="/ppdb/data3"><input type="button" class="btn btn-danger" value="sebelumnya" name=""></a>
    <input type="submit" class="btn btn-success" value="selanjutnya">
</center>
</div>
</form>
</div>
@endsection
</body>