@extends('../parent.app')
@section('content')

<div class="card text-dark">
<div class="card-header">
    <strong><h1>RAPOT</h1></strong>
</div>
<div class="card-body">
<form action="/ppdb/rapot" method="post">

<h1><strong>Masukan Nilai Rapot</strong></h1>
    {{ csrf_field() }}
    <table class="table">
        <thead class="bg-dark text-light">
            <tr>
                <td rowspan="2">no</td>
                <td rowspan="2">mata pelajaran</td>
                <td align="center" colspan="2">kelas7</td>
                <td align="center" colspan="2">kelas8</td>
                <td>kelas9</td>
            </tr>
            <tr>
                <td>semester 1</td>
                <td>semester 2</td>
                <td>semester 1</td>
                <td>semester 2</td>
                <td>semester 1</td>
            </tr>
        </thead>
        <tbody class="bg-light">
            <tr>
                <td><strong>1</strong></td>
                <td><strong>PAI</strong></td>
                <td><input type="number" class="form-control col-md-7" name="pai_sm1_7" id=""></td>
                <td><input type="number" class="form-control col-md-7" name="pai_sm2_7" id=""></td>
                <td><input type="number" class="form-control col-md-7" name="pai_sm1_8" id=""></td>
                <td><input type="number" class="form-control col-md-7" name="pai_sm2_8" id=""></td>
                <td><input type="number" class="form-control col-md-7" name="pai_sm1_9" id=""></td>
            </tr>
            <tr>
                <td><strong>2</strong></td>
                <td><strong>Bahasa Indonesia</strong></td>
                <td><input type="number" class="form-control col-md-7" name="bindo_sm1_7" id=""></td>
                <td><input type="number" class="form-control col-md-7" name="bindo_sm2_7" id=""></td>
                <td><input type="number" class="form-control col-md-7" name="bindo_sm1_8" id=""></td>
                <td><input type="number" class="form-control col-md-7" name="bindo_sm2_8" id=""></td>
                <td><input type="number" class="form-control col-md-7" name="bindo_sm1_9" id=""></td>
            </tr>
            <tr>
                <td><strong>3</strong></td>
                <td><strong>Bahasa Inggris</strong></td>
                <td><input type="number" class="form-control col-md-7" name="bing_sm1_7"></td>
                <td><input type="number" class="form-control col-md-7" name="bing_sm2_7"></td>
                <td><input type="number" class="form-control col-md-7" name="bing_sm1_8"></td>
                <td><input type="number" class="form-control col-md-7" name="bing_sm2_8"></td>
                <td><input type="number" class="form-control col-md-7" name="bing_sm1_9"></td>
            </tr>
            <tr>
                <td><strong>4</strong></td>
                <td><strong>Matematika</strong></td>
                <td><input type="number" class="form-control col-md-7" name="mtk_sm1_7" id=""></td>
                <td><input type="number" class="form-control col-md-7" name="mtk_sm2_7" id=""></td>
                <td><input type="number" class="form-control col-md-7" name="mtk_sm1_8" id=""></td>
                <td><input type="number" class="form-control col-md-7" name="mtk_sm2_8" id=""></td>
                <td><input type="number" class="form-control col-md-7" name="mtk_sm1_9" id=""></td>
            </tr>
            <tr>
                <td><strong>5</strong></td>
                <td><strong>IPA</strong></td>
                <td><input type="number" class="form-control col-md-7" name="ipa_sm1_7" id=""></td>
                <td><input type="number" class="form-control col-md-7" name="ipa_sm2_7" id=""></td>
                <td><input type="number" class="form-control col-md-7" name="ipa_sm1_8" id=""></td>
                <td><input type="number" class="form-control col-md-7" name="ipa_sm2_8" id=""></td>
                <td><input type="number" class="form-control col-md-7" name="ipa_sm1_9" id=""></td>
            </tr>
            <tr>
                <td><strong>6</strong></td>
                <td><strong>IPS</strong></td>
                <td><input type="number" class="form-control col-md-7" name="ips_sm1_7" id=""></td>
                <td><input type="number" class="form-control col-md-7" name="ips_sm2_7" id=""></td>
                <td><input type="number" class="form-control col-md-7" name="ips_sm1_8" id=""></td>
                <td><input type="number" class="form-control col-md-7" name="ips_sm2_8" id=""></td>
                <td><input type="number" class="form-control col-md-7" name="ips_sm1_9" id=""></td>
            </tr>
            <tr>
                <td><strong>7</strong></td>
                <td><strong>Prestasi Yang diraih</strong></td>
                <td colspan="6"><textarea name="pres" class="form-control col-md-11" id="" cols="100" rows="8"></textarea></td>
            </tr>
        </tbody>
    </table>
    
</div>
<div class="card-footer">
<center>
    <a href="/ppdb/data4"><input type="button" name="" class="btn btn-danger" value="sebelumnya"></a>
    <input type="submit" class="btn btn-success" onclick="alert('success')" value="selanjutnya">
</center>
</div>
</form>
</div>
@endsection