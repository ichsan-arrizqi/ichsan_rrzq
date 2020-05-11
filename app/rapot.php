<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rapot extends Model
{
    protected $table = 'rapot';
    protected $fillable = [	'pai_sm1_7', 'pai_sm2_7' ,'pai_sm1_8',	'pai_sm2_8' ,'pai_sm1_9' ,'bindo_sm1_7' ,'bindo_sm2_7' ,'bindo_sm1_8' ,	'bindo_sm2_8' ,	'bindo_sm1_9' ,'bing_sm1_7' ,'bing_sm2_7' ,'bing_sm1_8' ,'bing_sm2_8' ,'bing_sm1_9' ,'mtk_sm1_7' ,'mtk_sm2_7' ,'mtk_sm1_8' ,	'mtk_sm2_8' ,	'mtk_sm1_9' ,	'ipa_sm1_7',	'ipa_sm2_7' ,	'ipa_sm1_8' ,	'ipa_sm2_8' ,	'ipa_sm1_9' ,	'ips_sm1_7' ,	'ips_sm2_7' ,	'ips_sm1_8' ,	'ips_sm2_8' 	,'ips_sm1_9' ,'pres' ,'id_siswa'];
}
