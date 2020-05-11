@extends('../parent.app')
@section('content')
<div class="card text-dark">
<div class="card-header">
    <strong><h1>DATA CALON MURID</h1></strong>
</div>
<div class="card-body">
    <form action="/ppdb/data1" method="post">
        {{ csrf_field() }}
        <div class="form-group">
        
            <h3><label for="nama"><strong>Nama Lengkap</strong></label>
            <input type="text" id="nama" name="nama_lengkap" class="form-control">
            @if($errors->has('nama_lengkap'))
            <h5 class="text-danger">{{ $errors->first('nama_lengkap') }}</h5>
            @endif
        </div>
        <div class="form-group">
        <h3><label for="panggil"><strong>Nama Panggilan</strong></label>
            <input type="text" id="panggil" name="nama_panggilan" class="form-control">
            @if($errors->has('nama_panggilan'))
            <h5 class="text-danger">{{ $errors->first('nama_panggilan') }}</h5>
            @endif
        </div>
        <h3><label for=""><strong>Jenis Kelamin</strong></label>
        <div class="custom-control custom-radio">
          <input type="radio" id="ContohRadio1" name="kelamin" value="laki" class="custom-control-input">
          <label class="custom-control-label" for="ContohRadio1">Laki - laki</label>
      </div>
      <div class="custom-control custom-radio">
          <input type="radio" id="ContohRadio2" name="kelamin" value="prempuan" class="custom-control-input">
          <label class="custom-control-label" for="ContohRadio2">Prempuan</label>
          
          @if($errors->has('kelamin'))
          <h5 class="text-danger">{{ $errors->first('kelamin') }}</h5>
          @endif
      </div>
      <br>
      <div class="form-group">
        <label for=""><strong>Tempat,tanggal lahir</strong></label>
        <input type="text" class="form-control" name="ttl">
        @if($errors->has('ttl'))
        <h5 class="text-danger">{{ $errors->first('ttl') }}</h5>
        @endif
    </div>
    <div class="form-group">
        <label for="agama"><strong>Agama</strong></label>
        <select name="agama" class="form-control" id="agama">
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
    </div>
    <div class="form-group">
        <label for="cita"><strong>cita cita</strong></label>
        <input type="text" class="form-control" name="cita" id="cita">
        @if($errors->has('cita'))
        <h5 class="text-danger">{{ $errors->first('cita') }}</h5>
        @endif
    </div>
    <div class="form-group">
        <label for=""><strong>Jumlah saudara</strong></label>
        <hr>
        <label for="">kandung</label>
        <input type="number" name="kandung" class="form-control" value="0">
        <label for="">tiri</label>
        <input type="number" name="tiri" class="form-control" value="0">
        <label for="">angkat</label>
        <input type="number" name="angkat" class="form-control" value="0">
        <hr>
    </div>
    <div class="form-group">
        <label for="berat"><strong>Berat badan</strong></label>
        <input type="number" name="berat_badan" class="form-control">
        @if($errors->has('berat_badan'))
        <h5 class="text-danger">{{ $errors->first('berat_badan') }}</h5>
        @endif
    </div>
    <div class="form-group">
        <label for="tinggi"><strong>Tinggi badan</strong></label>
        <input type="number" name="tinggi_badan" class="form-control">
        @if($errors->has('tinggi_badan')) 
        <h5 class="text-danger">{{ $errors->first('tinggi_badan') }}</h5>
        @endif
    </div>
    <div class="golongan darah">
        <label for=""><strong>Golongan Darah</strong></label>
        <select name="darah" id="" class="form-control">
            <option value="a">A</option>
            <option value="b">B</option>    
            <option value="ab">AB</option>
            <option value="o">O</option>
        </select>
        @if($errors->has('darah'))
        <h5 class="text-danger">{{ $errors->first('darah') }}</h5>
        @endif
    </div>

</div>
<div class="card-footer">
<center>
<input type="submit" value="Selanjutnya" class="btn btn-success">
</center>
</div>
</div>
</form>
@endsection