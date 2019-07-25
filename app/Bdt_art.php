<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bdt_art extends Model
{
    protected $table = 'bdt_art_51';

    protected $primaryKey = 'IDARTBDT';

    public $timestamps = false;

    protected $fillable = [
		'IDBDT',
		'RUTA6',
		'NoPesertaPBDT',
		'NoPesertaPBDTART',
		'NoPBDTKemsos',
		'NoArtPBDTKemsos',
		'Vector1',
		'Vector2',
		'Vector3',
		'Vector4',
		'KDGabungan4',
		'KDPROP',
		'KDKAB',
		'KDKEC',
		'KDDESA',
		'NoPesertaPKH',
		'NoPesertaKKS2016',
		'NoPesertaPBI',
		'NoArtPKH',
		'NoArtPBDT',
		'NoArtKKS2016',
		'NoArtPBI',
		'Nama',
		'JnsKel',
		'TmpLahir',
		'TglLahir',
		'HubKRT',
		'NIK',
		'NoKK',
		'Hub_KRT',
		'NUK',
		'Hubkel',
		'Umur',
		'Sta_kawin',
		'Ada_akta_nikah',
		'Ada_diKK',
		'Ada_kartu_identitas',
		'Sta_hamil',
		'Jenis_cacat',
		'Penyakit_kronis',
		'Partisipasi_sekolah',
		'Pendidikan_tertinggi',
		'Kelas_tertinggi',
		'Ijazah_tertinggi',
		'Sta_Bekerja',
		'Jumlah_jamkerja',
		'Lapangan_usaha',
		'Status_pekerjaan',
		'Sta_keberadaan_art',
		'Sta_kepesertaan_pbi',
		'Ada_kks',
		'Ada_pbi',
		'Ada_kip',
		'Ada_pkh',
		'Ada_rastra',
		'Anak_diluar_rt',
		'namagadis_ibukandung',
		'sta_keberadaan_kks',
		'InitData',
		'LastUpdateData',
		'kodewilayah',
		'IDver',
		'RID_RumahTangga',
		'RID_Individu',
		'lapangan_usahaart',
		'jumlah_pekerja',
		'lokasi_usaha',
		'omset_usaha',
		'id',
		'NU_RT',
		'id_hh',
		'nourut_rt',
		'sumber_data',
		'NoPBDTKemsos_2017',
		'KDPROP_2017',
		'KDKAB_2017',
		'KDKEC_2017',
		'KDDESA_2017',
		'DUK_NIK',
		'DUK_NO_KK',
		'DUK_NAMA_LGKP',
		'DUK_STAT_HBKEL',
		'DUK_NO_RW',
		'DUK_NO_RT',
		'DUK_NO_KEL',
		'DUK_ALAMAT',
		'DUK_TMPT_LHR',
		'DUK_TGL_LHR',
		'DUK_JENIS_KLMIN',
		'DUK_STATUS_KAWIN',
		'DUK_NAMA_LGKP_AYAH',
		'DUK_JENIS_PKRJN',
		'DUK_PDDK_AKH',
		'DUK_NAMA_LGKP_IBU',
		'IDPENGURUS',
		'NOREKENING',
		'KDPROP_OLD',
		'KDKAB_OLD',
		'KDKEC_OLD',
		'KDDESA_OLD',
		'Alamat_Pengurus',
		'MasukKuota',
		'Nama_Pengurus',
		'tgl_pindah',
		'oleh_pindah',
		'id_periode',
		'KET_BDTMEI18',
		'cek_kks',
		'NoArtPBDTKemsos_2017',
		'id_periode_kks',
		'data_pengurus_dari',
		'SEGMEN_BPJS',
		'status'
	];
	
	public function Bdt()
    {
        return $this->belongsTo('Bdt');
    }
}
