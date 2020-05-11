@extends('../parent.app')
@section('content')
<div class="card text-dark">
<div class="card-header">
    <strong><h1>KETERANGAN TEMPAT TINGGAL</h1></strong>
</div>
<div class="card-body">

    <form action="/ppdb/data2" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <h3><label for="nama"><strong>Alamat Rumah</strong></label>
            <textarea class="form-control" name="alamat" id="nama" cols="6" rows="2"></textarea>
            @if($errors->has('alamat'))
            <h5 class="text-danger">{{ $errors->first('alamat') }}</h5>
            @endif
        </div>
        <div class="form-group">
        <h3><label for="kelurahan"><strong>Kelurahan</strong></label>
            <input type="text" id="kelurahan" name="kelurahan" class="form-control">
            @if($errors->has('kelurahan'))
            <h5 class="text-danger">{{ $errors->first('kelurahan') }}</h5>
            @endif
        </div>
        <div class="form-group">
        <h3><label for="kecamatan"><strong>Kecamatan</strong></label>
            <input type="text" id="kecamatan" name="kecamatan" class="form-control">
            @if($errors->has('kecamatan'))
            <h5 class="text-danger">{{ $errors->first('kecamatan') }}</h5>
            @endif
        </div>
        <div class="form-group">
        <h3><label for="KotaKabupaten"><strong>Kota/Kabupaten</strong></label>
            <input type="text" id="KotaKabupaten" name="KotaKabupaten" class="form-control">
            @if($errors->has('KotaKabupaten'))
            <h5 class="text-danger">{{ $errors->first('KotaKabupaten') }}</h5>
            @endif
        </div>
        <div class="form-group">
        <h3><label for="provinsi"><strong>provinsi</strong></label>
            <input type="text" id="provinsi" name="provinsi" class="form-control">
            @if($errors->has('provinsi'))
            <h5 class="text-danger">{{ $errors->first('provinsi') }}</h5>
            @endif
            <h3><label for="kode_pos"><strong>kode pos</strong></label>
            <input type="number" name="kode_pos" id="kode_pos" class="form-control">
            @if($errors->has('kode_pos'))
            <h5 class="text-danger">{{ $errors->first('kode_pos') }}</h5>
            @endif
        </div>
        <div class="form-group">
        <h3><label for="no"><strong>no telepon</strong></label>
            <input type="number" class="form-control" name="no">
            @if($errors->has('no'))
            <h5 class="text-danger">{{ $errors->first('no') }}</h5>
            @endif
        </div>
        <div class="form-group">
        <h3><label for="email"><strong>e-mail</strong></label>
            <input type="email" name="email" id="email" class="form-control">
            @if($errors->has('email'))
            <h5 class="text-danger">{{ $errors->first('email') }}</h5>
            @endif
        </div>
        <h3><label for=""><strong>Tinggal dengan</strong></label>
        <div class="custom-control custom-radio">
          <input type="radio" id="ContohRadio1" name="radio" value="orang tua" class="custom-control-input">
          <label class="custom-control-label" for="ContohRadio1">orang tua</label>
      </div>
      <div class="custom-control custom-radio">
          <input type="radio" id="ContohRadio2" name="radio" value="asrama" class="custom-control-input">
          <label class="custom-control-label" for="ContohRadio2">asrama</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="ContohRadio3" name="radio" value="saudara">
        <label for="ContohRadio3" class="custom-control-label">saudara</label>
    </div>

</div>
<div class="card-footer">
<center>
    <a href="/ppdb/data1"><input type="button" class="btn btn-danger" name="" value="sebelumnya"></a>
    <input type="submit" class="btn btn-success" value="selanjutnya">
</center>
</div>
</form>
</div>
@endsection