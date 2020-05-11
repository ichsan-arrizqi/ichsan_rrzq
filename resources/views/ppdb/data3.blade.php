@extends('../parent.app')
@section('content')
<div class="card text-dark">
<div class="card-header">

        <strong><h1>KETERANGAN KESEHATAN</h1></strong>
</div>
<div class="card-body">


    <form action="/ppdb/data3" method="post">
        {{ csrf_field() }}
        <div class="form">
            <div class="form-group">
                <label for="TBC"><strong><h4>TBC</h4></strong></label>
                <input type="text" id="TBC" class="form-control" name="tbc" placeholder="Sebut(Ya/Tidak) - Kapan">
                @if($errors->has('tbc'))
                <strong class="text-danger">{{ $errors->first('tbc') }}</strong>
                @endif
            </div>
            <div class="form-group">
                <label for="malaria"><strong><h4>Malaria</h4></strong></label>
                <input type="text" name="malaria" id="malaria" class="form-control" placeholder="Sebut(Ya/Tidak) - Kapan">
                @if($errors->has('malaria'))
                <strong class="text-danger">{{ $errors->first('malaria') }}</strong>
                @endif
            </div>
            <div class="form-group">
                <label for="chotipa"><strong><h4>Chotipa</h4></strong></label>
                <input type="text" name="chotipa" id="chotipa" class="form-control" placeholder="Sebut(Ya/Tidak) - Kapan">
                @if($errors->has('chotipa'))
                <strong class="text-danger">{{ $errors->first('malaria') }}</strong>
                @endif
            </div>
            <div class="form-group">
                <label for="cacar"><strong><h4>Cacar</h4></strong></label>
                <input type="text" name="cacar" id="cacar" class="form-control" placeholder="Sebut(Ya/Tidak) - Kapan">
                @if($errors->has('cacar'))
                <strong class="text-danger">{{ $errors->first('cacar') }}</strong>
                @endif
            </div>
            <div class="form-group">
                <label for="lainnya"><strong><h4>Lain-lain</h4></strong></label>
                <input type="text" name="lainnya" id="lainnya" class="form-control" placeholder="Sebut(Ya/Tidak) - Kapan">
                @if($errors->has('lainnya'))
                <strong class="text-danger">{{ $errors->first('lainnya') }}</strong>
                @endif
            </div>
        </div>
        <div class="form-group">
            <label for="jasmani"><strong><h4>Kelainan Jasmani/Lainnya</h4></strong></label>
            <input type="text" name="jasmani" id="jasmani" class="form-control" placeholder="Sebut(Ya/Tidak) - Kapan">
            @if($errors->has('jasmani'))
            <strong class="text-danger">{{ $errors->first('jasmani') }}</strong>
            @endif
        </div>

</div>
<div class="card-footer">
<center>
    <a href="/ppdb/data2"><input type="button" class="btn btn-danger" value="sebelumnya" name=""></a>
    <input type="submit" class="btn btn-success" value="selanjutnya">
</center>
</div>
</form>
</div>
@endsection