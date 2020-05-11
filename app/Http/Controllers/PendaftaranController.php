<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\data1;
use App\data2;
use App\data3;
use App\data4;
use App\rapot;
class PendaftaranController extends Controller
{
    public function index()
    {
        return view('ppdb.data1');
    }
    public function data1(Request $req)
    {
        $this->validate($req,[
            'nama_lengkap' => 'required',
            'nama_panggilan' => 'required',
            'ttl' => 'required',
            'agama' => 'required',
            'cita' => 'required',
            'berat_badan' => 'required',
            'tinggi_badan' => 'required',
            'darah' => 'required'

        ]);
        $count = data1::all()->where('id')->count();
        $count = $count + 1;
        data1::create([
            'nama_lengkap' => $req->nama_lengkap,
            'nama_panggilan' => $req->nama_panggilan,
            'jenis_kelamin' => $req->kelamin,
            'ttl' => $req->ttl,
            'agama' => $req->agama,
            'cita' => $req->cita,
            'kandung' => $req->kandung,
            'tiri' => $req->tiri,
            'angkat' => $req->angkat,
            'berat_badan' => $req->berat_badan,
            'tinggi_badan' => $req->tinggi_badan,
            'darah' => $req->darah,
            'id_siswa' => $count
        ]);
        return redirect('ppdb/data2');
    }
    public function data2(Request $req)
    {
        $this->validate($req,[
            'alamat' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'KotaKabupaten' => 'required',
            'provinsi' => 'required',
            'kode_pos' => 'required',
            'no' => 'required',
            'email' => 'required'
        ]);

        $count = data1::all()->where('id')->count();
        $count = $count + 1;
        data2::create([
            'alamat' => $req->alamat,
            'kelurahan' => $req->kelurahan,
            'kecamatan' => $req->kecamatan,
            'kota/kabupaten'=>$req->KotaKabupaten,
            'provinsi' => $req->provinsi,
            'kode_pos'=> $req->kode_pos,
            'no' => $req->no,
            'email' => $req->email,
            'tinggal' => $req->radio,

            'id_siswa' => $count
        ]);
        return redirect('ppdb/data3');
    }
    public function data3(Request $req)
    {
        $this->validate($req,[
            'tbc' => 'required',
            'malaria' => 'required',
            'chotipa' => 'required',
            'cacar' => 'required',
            'lainnya' => 'required',
            'jasmani' => 'required'
        ]);

        $count = data1::all()->where('id')->count();
        $count = $count + 1;
        data3::create([
            'tbc' => $req->tbc,
            'malaria' => $req->malaria,
            'chotipa' => $req->chotipa,
            'cacar' => $req->cacar,
            'lainnya' => $req->lainnya,
            'jasmani' => $req->jasmani,

            'id_siswa' => $count
        ]);
        return redirect('/ppdb/data4');
    }
    public function data4(Request $req)
    {

        $count = data1::all()->where('id')->count();
        $count = $count + 1;
        if(isset($req->cek_ayah))
        {
            $this->validate($req,[
                'nama_ayah' => 'required',
                'ttl_ayah' => 'required',
                'pekerjaan_ayah' => 'required',
                'pendidikan_ayah' => 'required',
                'kewarganegaraan_ayah' => 'required',
                'agama_ayah' => 'required',
                'no_ayah' => 'required'
            ]);
            data4::create([
                'nama_ayah' => $req->nama_ayah,
                'ttl_ayah' => $req->ttl_ayah,
                'pekerjaan_ayah' => $req->pekerjaan_ayah,
                'pendidikan_ayah' => $req->pendidikan_ayah,
                'kewarganegaraan_ayah' => $req->kewarganegaraan_ayah,
                'agama_ayah' => $req->agama_ayah,
                'no_ayah' => $req->no_ayah,

            'id_siswa' => $count
            ]);
            if(isset($req->cek_ibu))
            {
                $this->validate($req,[
                    'nama_ibu' => 'required',
                    'ttl_ibu' => 'required',
                    'pekerjaan_ibu' => 'required',
                    'pendidikan_ibu' => 'required',
                    'kewarganegaraan_ibu' => 'required',
                    'agama_ibu' => 'required',
                    'no_ibu' => 'required'

                ]);
                data4::create([
                    'nama_ibu' => $req->nama_ibu,
                    'ttl_ibu' => $req->ttl_ibu,
                    'pekerjaan_ibu' => $req->pekerjaan_ibu,
                    'kewarganegaraan_ibu' => $req->kewarganegaraan_ibu,
                    'agama_ibu' => $req->agama_ibu,
                    'no_ibu' => $req->no_ibu,

            'id_siswa' => $count
                ]);
            }
        }
        if(isset($req->cek_ibu))
        {
            $this->validate($req,[
                'nama_ibu' => 'required',
                'ttl_ibu' => 'required',
                'pekerjaan_ibu' => 'required',
                'pendidikan_ibu' => 'required',
                'kewarganegaraan_ibu' => 'required',
                'agama_ibu' => 'required',
                'no_ibu' => 'required'

            ]);
            data4::create([
                'nama_ibu' => $req->nama_ibu,
                'ttl_ibu' => $req->ttl_ibu,
                'pekerjaan_ibu' => $req->pekerjaan_ibu,
                'kewarganegaraan_ibu' => $req->kewarganegaraan_ibu,
                'agama_ibu' => $req->agama_ibu,
                'no_ibu' => $req->no_ibu,

            'id_siswa' => $count
            ]);
            if(isset($req->cek_ayah))
            {
                $this->validate($req,[
                    'nama_ayah' => 'required',
                    'ttl_ayah' => 'required',
                    'pekerjaan_ayah' => 'required',
                    'pendidikan_ayah' => 'required',
                    'kewarganegaraan_ayah' => 'required',
                    'agama_ayah' => 'required',
                    'no_ayah' => 'required'
                ]);
                
            data4::create([
                'nama_ayah' => $req->nama_ayah,
                'ttl_ayah' => $req->ttl_ayah,
                'pekerjaan_ayah' => $req->pekerjaan_ayah,
                'pendidikan_ayah' => $req->pendidikan_ayah,
                'kewarganegaraan_ayah' => $req->kewarganegaraan_ayah,
                'agama_ayah' => $req->agama_ayah,
                'no_ayah' => $req->no_ayah,

            'id_siswa' => $count
            ]);
            }
        }
        if(isset($req->cek_wali))
        {
            $this->validate($req,[
                'nama_wali' => 'required',
                'ttl_wali' => 'required',
                'pekerjaan_wali' => 'required',
                'pendidikan_wali' => 'required',
                'kewarganegaraan_wali' => 'required',
                'agama_wali' => 'required',
                'no_wali' => 'required',
                'hubungan_wali' => 'required',
                'email_wali' => 'required'
            ]);
            data4::create([
                'nama_wali' => $req->nama_wali,
                'ttl_wali' => $req->ttl_wali,
                'pekerjaan_wali' => $req->pekerjaan_wali,
                'kewarganegaraan_wali' => $req->kewarganegaraan_wali,
                'agama_wali' => $req->agama_wali,
                'no_wali' => $req->no_wali,
                'hubungan_wali' => $req->hubungan_wali,
                'email_wali' => $req->email_wali,
            'id_siswa' => $count
            ]);
        }
        return redirect('/ppdb/rapot');
    }
    public function rapot(Request $req)
    {

        $count = data1::all()->where('id')->count();
        $count = $count + 1;
        rapot::create([
            'pai_sm1_7' => $req->pai_sm1_7,
             'pai_sm2_7' => $req->pai_sm2_7,
             'pai_sm1_8'=> $req->pai_sm1_8,
                 'pai_sm2_8' => $req->pai_sm2_8,
                 'pai_sm1_9' => $req->pai_sm1_9,
                 'bindo_sm1_7' => $req->bindo_sm1_7,
                 'bindo_sm2_7' => $req->bindo_sm2_7,
                 'bindo_sm1_8' => $req->bindo_sm1_8,
                 'bindo_sm2_8' => $req->bindo_sm2_8,
                 'bindo_sm1_9' => $req->bindo_sm1_9,
                 'bing_sm1_7' => $req->bing_sm1_7,
                 'bing_sm2_7' => $req->bing_sm2_7,
                 'bing_sm1_8' => $req->bing_sm1_8,
                 'bing_sm2_8' => $req->bing_sm2_8,
                 'bing_sm1_9' => $req->bing_sm1_9,
                 'mtk_sm1_7' => $req->mtk_sm1_7,
            'mtk_sm2_7' => $req->mtk_sm2_7,
            'mtk_sm1_8' => $req->mtk_sm1_8,	
            'mtk_sm2_8' => $req->mtk_sm2_8,
            'mtk_sm1_9' => $req->mtk_sm1_9,
            'ipa_sm1_7' => $req->ipa_sm1_7,
            'ipa_sm2_7' => $req->ipa_sm2_7,
            'ipa_sm1_8' => $req->ipa_sm1_8,
            'ipa_sm2_8' => $req->ipa_sm2_8,
            'ipa_sm1_9' => $req->ipa_sm1_9,
            'ips_sm1_7' => $req->ips_sm1_7,
            'ips_sm2_7' => $req->ips_sm2_7,
            'ips_sm1_8' => $req->ips_sm1_8,
            'ips_sm2_8' => $req->ips_sm2_8,
            'ips_sm1_9' => $req->ips_sm1_9,
            'pres' => $req->pres,
            'id_siswa' => $count
        ]);
        return redirect('ppdb/rapot');
    }
    public function laporan()
    {

        $data1 = data1::all();
        $data2 = data2::all();
        $data3 = data3::all();
        $data4 = data4::all();
        $rapot = rapot::all();
        return view('ppdb.laporan',['data1'=>$data1,'data2'=>$data2,'data3'=>$data3,'data4'=>$data4,'rapot'=>$rapot]);
    }
}