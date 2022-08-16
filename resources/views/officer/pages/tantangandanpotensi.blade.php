@extends('officer.layouts.app')

@section('title')
Tantangan Potensi
@endsection

@section('content')
<div class="row">
  <div class="col-lg-12 mb-lg-0 mb-4">
    <div class="card h-100">
      <div class="card-header bg-transparent p-0 mx-4 mt-3">
        <h6 class="text-uppercase font-weight-bold">Tantangan dan Potensi Kampung Biatan Lempake</h6>
      </div>
      <div class="card-body py-0">
        <div class="table-responsive">
          <table class="table">
            <tbody>
              <tr><td class="text-center text-sm font-weight-bold table-warning" colspan="3">Urusan Wajib</td></tr>
              <tr><td class="text-center text-sm font-weight-bold table-success" colspan="3">A. Pendidikan</td></tr>
              <tr>
                <td class="font-weight-bold text-sm">No</td>
                <td class="font-weight-bold text-sm text-center text-danger">Tantangan</td>
                <td class="font-weight-bold text-sm text-center text-success">Potensi</td>
              </tr>

              <tr>
                <td class="text-sm">1</td>
                <td class="text-sm ">Tidak ada perumahan guru SDN dan SMP</td>
                <td class="text-sm">Batu, tenaga pekerja, tukang batu, <br> kayu, lahan perumahan</td>
              </tr>
              <tr>
                <td class="text-sm">2</td>
                <td class="text-sm ">Kekurangan dan dalam pembebasan lahan perpustakaan</td>
                <td class="text-sm">Batu, tenaga pekerja, tukang batu, <br> kayu, lahan perumahan</td>
              </tr>
              <tr>
                <td class="text-sm">3</td>
                <td class="text-sm ">Belum ada tempat parkir SMP</td>
                <td class="text-sm">Batu, tenaga pekerja, tukang batu, <br> kayu, lahan perumahan</td>
              </tr>
              <tr>
                <td class="text-sm">4</td>
                <td class="text-sm ">Belum ada rabat intres SD</td>
                <td class="text-sm">Batu, tenaga pekerja, tukang batu, <br> kayu, lahan perumahan</td>
              </tr>

              <tr><td class="text-center text-sm font-weight-bold table-success" colspan="3">B. Kesehatan</td></tr>

              <tr>
                <td class="text-sm">1</td>
                <td class="text-sm ">Bangunan posyandu sudah tua</td>
                <td class="text-sm">Batu, tenaga pekerja, tukang batu, <br> kayu, lahan perumahan</td>
              </tr>
              <tr>
                <td class="text-sm">2</td>
                <td class="text-sm ">Bangunan puskesmas sudah tua</td>
                <td class="text-sm">Batu, tenaga pekerja, tukang batu, <br> kayu, lahan perumahan</td>
              </tr>

              <tr><td class="text-center text-sm font-weight-bold table-success" colspan="3">C. Sarana & Prasarana</td></tr>

              <tr>
                <td class="text-sm">1</td>
                <td class="text-sm ">Belum ada badan jalan di Gunung Puliu RT.03</td>
                <td class="text-sm">Batu, tenaga pekerja, tukang batu, <br> kayu, lahan perumahan</td>
              </tr>
              <tr>
                <td class="text-sm">2</td>
                <td class="text-sm ">Belum ada badan jalan di Ritut RT.01</td>
                <td class="text-sm">Batu, tenaga pekerja, tukang batu, <br> kayu, lahan perumahan</td>
              </tr>
              <tr>
                <td class="text-sm">3</td>
                <td class="text-sm ">Belum ada badan jalan Pemapak RT.01</td>
                <td class="text-sm">Batu, tenaga pekerja, tukang batu, <br> kayu, lahan perumahan</td>
              </tr>
              <tr>
                <td class="text-sm">4</td>
                <td class="text-sm ">Belum ada badan jalan Sensebul RT.01</td>
                <td class="text-sm">Batu, tenaga pekerja, tukang batu, <br> kayu, lahan perumahan</td>
              </tr>
              <tr>
                <td class="text-sm">5</td>
                <td class="text-sm ">Belum ada badan jalan Bulang Layap RT.02</td>
                <td class="text-sm">Batu, tenaga pekerja, tukang batu, <br> kayu, lahan perumahan</td>
              </tr>
              <tr>
                <td class="text-sm">6</td>
                <td class="text-sm ">Belum ada badan jalan di jalan Ke mata air RT.02</td>
                <td class="text-sm">Batu, tenaga pekerja, tukang batu, <br> kayu, lahan perumahan</td>
              </tr>
              <tr>
                <td class="text-sm">7</td>
                <td class="text-sm ">Belum ada badan jalan Usaha Tani RT.02</td>
                <td class="text-sm">Batu, tenaga pekerja, tukang batu, <br> kayu, lahan perumahan</td>
              </tr>
              <tr>
                <td class="text-sm">8</td>
                <td class="text-sm ">Belum ada badan jalan Keciping RT.03</td>
                <td class="text-sm">Batu, tenaga pekerja, tukang batu, <br> kayu, lahan perumahan</td>
              </tr>
              <tr>
                <td class="text-sm">9</td>
                <td class="text-sm ">Belum ada badan jalan mengebek</td>
                <td class="text-sm">Batu, tenaga pekerja, tukang batu, <br> kayu, lahan perumahan</td>
              </tr>
              <tr>
                <td class="text-sm">10</td>
                <td class="text-sm ">Belum ada badan jalan Kerikik RT.01</td>
                <td class="text-sm">Batu, tenaga pekerja, tukang batu, <br> kayu, lahan perumahan</td>
              </tr>
              <tr>
                <td class="text-sm">11</td>
                <td class="text-sm ">Belum ada badan jalan Keciping Layap RT.02</td>
                <td class="text-sm">Batu, tenaga pekerja, tukang batu, <br> kayu, lahan perumahan</td>
              </tr>
              <tr>
                <td class="text-sm">12</td>
                <td class="text-sm ">Peningkatan/Penimbunan jalan Bulang layap RT.02</td>
                <td class="text-sm">Batu, tenaga pekerja, tukang batu, <br> kayu, lahan perumahan</td>
              </tr>
              <tr>
                <td class="text-sm">13</td>
                <td class="text-sm ">Peningkatan/Penimbunan jalan Usaha Tani RT.02</td>
                <td class="text-sm">Batu, tenaga pekerja, tukang batu, <br> kayu, lahan perumahan</td>
              </tr>
              <tr>
                <td class="text-sm">14</td>
                <td class="text-sm ">Peningkatan/Penimbunan jalan Telaga RT.02</td>
                <td class="text-sm">Batu, tenaga pekerja, tukang batu, <br> kayu, lahan perumahan</td>
              </tr>
              <tr>
                <td class="text-sm">15</td>
                <td class="text-sm ">Belum ada paret RT.03</td>
                <td class="text-sm">Batu, tenaga pekerja, tukang batu, <br> kayu, lahan perumahan</td>
              </tr>
              <tr>
                <td class="text-sm">16</td>
                <td class="text-sm ">Belum ada pagar makam RT.01 dan )3</td>
                <td class="text-sm">Batu, tenaga pekerja, tukang batu, <br> kayu, lahan perumahan</td>
              </tr>
              <tr>
                <td class="text-sm">17</td>
                <td class="text-sm ">Tidak ada pagar kampung</td>
                <td class="text-sm ">Tenaga buruh, tenaga swadaya, kayu</td>
              </tr>
              <tr>
                <td class="text-sm">18</td>
                <td class="text-sm ">Warga kesulitan mendapatkan air bersih <br> pada saat musim kemarau RT.03</td>
                <td class="text-sm ">Solar pump sungai</td>
              </tr>
              <tr>
                <td class="text-sm">19</td>
                <td class="text-sm ">Peningkatan jalan lorong kampung</td>
                <td class="text-sm">Batu pecah, batu kapur, tanah urug, tenaga pekerja</td>
              </tr>
              <tr>
                <td class="text-sm">20</td>
                <td class="text-sm ">Belum ada fasilitas fisik pendukung <br> pengelolaan wisata konservasi air panas</td>
                <td class="text-sm">Batu pecah, batu kapur, tanah urug, kayu, <br> sudah ada promosi media Peta RTGL hasil program <br> Kampung Sigap Sawit (KSS, YKAN-YP2SU, <br> tenaga pekerja</td>
              </tr>
              <tr>
                <td class="text-sm">21</td>
                <td class="text-sm ">Belum ada fasilitas fisik <br> pendukung konservasi mangrove</td>
                <td class="text-sm">Area mangrove, batu pecah, batu kapur, <br> tanah urug, kayu <br> Peta RTGL hasil program <br> Kampung Sigap Sawit (KSS, YKAN-YP2SU, <br> tenaga pekerja </td>
              </tr>
              <tr>
                <td class="text-sm">22</td>
                <td class="text-sm ">Belum ada fasilitas fisik <br> pengelolaan ANKT wilayah kampung <br> (dapat dikembangkan menjadi area <br> High Carbon Stock/HCS)</td>
                <td class="text-sm">Area perbukitan yang berpotensi <br> menjadi area NKT, batu pecah, batu kapur, <br> tanah urug, kayu <br> Peta RTGL hasil program <br> Kampung Sigap Sawit (KSS, YKAN-YP2SU, <br> tenaga pekerja</td>
              </tr>
              <tr>
                <td class="text-sm">23</td>
                <td class="text-sm ">Belum ada fasilitas fisik <br> pengelolaan ANKT area hutan <br> (dapat dikembangkan menjadi area <br> High Carbon Stock/HCS)</td>
                <td class="text-sm">Area hutan yang berpotensi <br> menjadi area NKT, batu pecah, batu kapur, <br> tanah urug, kayu <br> Peta RTGL hasil program <br> Kampung Sigap Sawit (KSS, YKAN-YP2SU, <br> tenaga pekerja</td>
              </tr>
              <tr>
                <td class="text-sm">24</td>
                <td class="text-sm ">Belum ada fasilitas jaringan listrik, <br> pendukung jaringan telekomunikasi, <br> dan ITE untuk lokasi wisata air panas</td>
                <td class="text-sm"></td>
              </tr>

              <tr><td class="text-center text-sm font-weight-bold table-success" colspan="3">D. Sosial Budaya</td></tr>

              <tr>
                <td class="text-sm">1</td>
                <td class="text-sm ">Lapangan volley ball di RT.01 <br> belum di semenisasi becek <br> pada saat hujan</td>
                <td class="text-sm">Batu,tukang, kayu, tenaga pekerja</td>
              </tr>
              <tr>
                <td class="text-sm">2</td>
                <td class="text-sm ">Lapangan bola belum selesai</td>
                <td class="text-sm">Karang taruna, pemain bola sepak</td>
              </tr>
              <tr>
                <td class="text-sm">3</td>
                <td class="text-sm ">Tidak ada lapangan takraw di RT.02</td>
                <td class="text-sm">Batu,tukang, kayu, tenaga pekerja, pemain takraw</td>
              </tr>
              <tr>
                <td class="text-sm">4</td>
                <td class="text-sm ">Tidak ada fasilitas olahraga umum <br> dilokasi wisata pemandian air panas</td>
                <td class="text-sm">Batu,tukang, kayu, tenaga pekerja</td>
              </tr>

              <tr><td class="text-center text-sm font-weight-bold table-success" colspan="3">E. Kerohanian</td></tr>

              <tr>
                <td class="text-sm">1</td>
                <td class="text-sm ">Tidak ada ustadzah untuk pembina majelis ta'lim</td>
                <td class="text-sm">Anggota majelis ta'lim</td>
              </tr>
              <tr>
                <td class="text-sm">2</td>
                <td class="text-sm ">Tidak ada anggaran untuk pembina majelis ta'lim</td>
                <td class="text-sm">Anggota majelis ta'lim, ustadz ada</td>
              </tr>
              <tr>
                <td class="text-sm">3</td>
                <td class="text-sm ">Pagar masjud belum selesai sehingga ternak <br> warga masih memasuki kawasan masjid</td>
                <td class="text-sm">Batu, tukang, kayu, tenaga pekerja, lokasi lahan</td>
              </tr>
              <tr>
                <td class="text-sm">4</td>
                <td class="text-sm ">Bangunan masjid belum selesai</td>
                <td class="text-sm">Batu, tukang, kayu, tenaga pekerja, lokasi lahan</td>
              </tr>
              <tr>
                <td class="text-sm">5</td>
                <td class="text-sm ">Banguna gereja belum selesai</td>
                <td class="text-sm">Batu, tukang, kayu, tenaga pekerja, lokasi lahan</td>
              </tr>
              <tr>
                <td class="text-sm">6</td>
                <td class="text-sm ">Pagar gereja belum selesai sehingga ternak <br> warga masih memasuki kawasan gereja</td>
                <td class="text-sm">Batu, tukang, kayu, tenaga pekerja, lokasi lahan</td>
              </tr>

              <tr><td class="text-center text-sm font-weight-bold table-success" colspan="3">F. Koperasi & Usaha Masyarakat</td></tr>

              <tr>
                <td class="text-sm">1</td>
                <td class="text-sm ">Kurangnya pembinaan bagi usaha kecil masyarakat <br> dibidang kursus elektornik</td>
                <td class="text-sm">Peserta dan pelatih ada</td>
              </tr>
              <tr>
                <td class="text-sm">2</td>
                <td class="text-sm ">Kurangnya pembinaan bagi usaha kecil masyarakat <br> dibidang menjahir</td>
                <td class="text-sm">Peserta dan pelatih ada</td>
              </tr>
              <tr>
                <td class="text-sm">3</td>
                <td class="text-sm ">Kurangnya pembinaan bagi usaha kecil masyarakat <br> dibidang kerajinan dan menganyam</td>
                <td class="text-sm">Peserta dan pelatih ada</td>
              </tr>
              <tr>
                <td class="text-sm">4</td>
                <td class="text-sm ">Kurangnya pembinaan bagi usaha kecil masyarakat <br> dibidang kursus bengkel motor</td>
                <td class="text-sm">Peserta dan pelatih ada</td>
              </tr>
              <tr>
                <td class="text-sm">5</td>
                <td class="text-sm ">Kurangnya pembinaan bagi usaha kecil masyarakat <br> dibidang kursus tata buga</td>
                <td class="text-sm">Peserta dan pelatih ada</td>
              </tr>
              <tr>
                <td class="text-sm">6</td>
                <td class="text-sm ">Kurangnya pembinaan bagi usaha kecil masyarakat <br> dibidang kursus teknik</td>
                <td class="text-sm">Peserta dan pelatih ada</td>
              </tr>
              <tr>
                <td class="text-sm">7</td>
                <td class="text-sm ">Kurangnya pembinaan keterampilan bagi <br> masyarakat di bidang kursus perkebunan</td>
                <td class="text-sm">Peserta dan pelatih ada</td>
              </tr>
              <tr>
                <td class="text-sm">8</td>
                <td class="text-sm ">Kurangnya pembinaan keterampilan pengelolaan <br> usaha pendukung pariwisata air panas</td>
                <td class="text-sm">Peserta ada (Kelompok Sadar Wisata Biatan <br> Bapinang, hasil program Kampung Sigap <br> Sawit YKAN - YP2SU</td>
              </tr>
              <tr>
                <td class="text-sm">9</td>
                <td class="text-sm ">Belum ada promosi wisata air <br> panas Biatan Bapinang</td>
                <td class="text-sm">Area wisata sudah ada <br> Sinyal Telkomsel pendukung media sosial sudah ada <br> Calon pengelola sudah ada (Kelompok Sadar Wisata <br> Biatan Bapinang, hasil program Kampung <br> Sigap Sawit YKAN - YP2SU</td>
              </tr>

              <tr><td class="text-center text-sm font-weight-bold table-success" colspan="3">G. Pemerintahan</td></tr>

              <tr>
                <td class="text-sm">1</td>
                <td class="text-sm ">Tidak ada balai peretemuan umum di RT.03</td>
                <td class="text-sm">Kayu, tukang, tenaga pekerja</td>
              </tr>
              <tr>
                <td class="text-sm">2</td>
                <td class="text-sm ">Aparat kampung pemahaman terhadap peraturan <br> dan perundang-undangan dan perda masih <br> lemah dan juga penyusunan profil kampung</td>
                <td class="text-sm">Adanya iktikad baik bagi aparat <br> untuk belajar perundang0-undangan</td>
              </tr>
              <tr>
                <td class="text-sm">3</td>
                <td class="text-sm ">Sulit kepengurusan masalah kampung kekecamatan <br> kota karena tak ada kendaraaan dina</td>
                <td class="text-sm">Aparat lengkap, Dana ADK</td>
              </tr>
              <tr>
                <td class="text-sm">4</td>
                <td class="text-sm ">Pengelolaan perencanaan RPJMK masik lemah</td>
                <td class="text-sm">Adanya iktikat baik untuk belajar</td>
              </tr>
              <tr>
                <td class="text-sm">5</td>
                <td class="text-sm ">Pengelolaan keuangan masih lemah</td>
                <td class="text-sm">Adanya iktikat baik untuk belajar</td>
              </tr>
              <tr>
                <td class="text-sm">6</td>
                <td class="text-sm ">Pengetahuan tentang ITE sangat kurang</td>
                <td class="text-sm">Adanya iktikat baik untuk belajar</td>
              </tr>
              <tr>
                <td class="text-sm">7</td>
                <td class="text-sm ">Anggota LPM Pengelolaan ADM kurang mengerti</td>
                <td class="text-sm">Struktur LPM lengkap</td>
              </tr>
              <tr>
                <td class="text-sm">8</td>
                <td class="text-sm ">BPK tidak mengerti pengelolaan ADM</td>
                <td class="text-sm">Anggota BPK lengkap</td>
              </tr>
              <tr>
                <td class="text-sm">9</td>
                <td class="text-sm ">Kantor PKK belum ada</td>
                <td class="text-sm">Kayu, tukang, batu, tenaga pekerja</td>
              </tr>
              <tr>
                <td class="text-sm">10</td>
                <td class="text-sm ">Bangunan kantor kakam belum sempurna</td>
                <td class="text-sm">Kayu, tukang, batu, tenaga pekerja</td>
              </tr>
              <tr>
                <td class="text-sm">11</td>
                <td class="text-sm ">Belum jelasnya batas wilayah kampung <br> (perbatasan dengan Kampung Tabalar Muara), <br> terkait wisata air panas</td>
                <td class="text-sm">Peta RTGL</td>
              </tr>
              <tr>
                <td class="text-sm">12</td>
                <td class="text-sm ">Belum jelasnya skema pengelolaan ANKT <br> kampung oleh pemenerintah/masyarakat kampung</td>
                <td class="text-sm">Peta RTGL, SK Bupati penyerahan kawasan air <br> panas kepada Kampung Biatan Bapinang</td>
              </tr>
              <tr>
                <td class="text-sm">13</td>
                <td class="text-sm ">Meja dan kursi aparat belum cukup</td>
                <td class="text-sm">Kayu, tukang, batu, tenaga pekerja</td>
              </tr>
              <tr>
                <td class="text-sm">14</td>
                <td class="text-sm ">Tidak ada pagar halaman kampung</td>
                <td class="text-sm">Kayu, tukang, batu, tenaga pekerja</td>
              </tr>
              <tr>
                <td class="text-sm">15</td>
                <td class="text-sm ">Pelatihan aparatur kampung</td>
                <td class="text-sm">Aparat aktif</td>
              </tr>

              <tr><td class="text-center text-sm font-weight-bold table-warning" colspan="3">Urusan Pilihan</td></tr>
              <tr><td class="text-center text-sm font-weight-bold table-info" colspan="3">A. Pertanian</td></tr>
              <tr>
                <td class="font-weight-bold text-sm">No</td>
                <td class="font-weight-bold text-sm text-center text-danger">Tantangan</td>
                <td class="font-weight-bold text-sm text-center text-success">Potensi</td>
              </tr>

              <tr>
                <td class="text-sm">1</td>
                <td class="text-sm ">Kegiatan kelompok tani kurang aktif</td>
                <td class="text-sm">Gapoktan, kelompok tani, PPL</td>
              </tr>
              <tr>
                <td class="text-sm">2</td>
                <td class="text-sm ">Ladang masyarakat belum bersertifikat</td>
                <td class="text-sm"> Lahan, tenaga swadaya</td>
              </tr>
              <tr>
                <td class="text-sm">3</td>
                <td class="text-sm ">Pengurus Gapoktan belum bisa mengelola <br> ADM dengan baik</td>
                <td class="text-sm">Gapoktan, kelompok tani, PPL</td>
              </tr>
              <tr>
                <td class="text-sm">4</td>
                <td class="text-sm ">Benih padi yang dibudidayakan belum mencukupi</td>
                <td class="text-sm">Lahan Gapoktan, kelompok tani sawah</td>
              </tr>
              <tr>
                <td class="text-sm">5</td>
                <td class="text-sm ">Hasil pertanian menurun dan juga karena <br> serangan hama dan penyakit sehingga <br> sering gagal panen</td>
                <td class="text-sm">Pupuk kompos, gapoktan, kelompok tani, PPL</td>
              </tr>
              <tr>
                <td class="text-sm">6</td>
                <td class="text-sm ">Kurang alat pengolahan tanah di lading <br> sehingga banyak sawah yang tidak tergarap</td>
                <td class="text-sm">Gapoktan, kelomopok tani, PPL</td>
              </tr>
              <tr>
                <td class="text-sm">7</td>
                <td class="text-sm ">Cek DAM dan saluran pembawa <br> persawahan belum ada</td>
                <td class="text-sm">Batu, tanah urug, tenaga pekerja, <br> tukang, gapoktan, kelompok tani, kayu, bambu</td>
              </tr>
              <tr>
                <td class="text-sm">8</td>
                <td class="text-sm ">Petani kesulitan mendapat bibit karet unggul</td>
                <td class="text-sm">Gapoktan, kelompok tani, tenaga pekerja</td>
              </tr>
              <tr>
                <td class="text-sm">9</td>
                <td class="text-sm ">Pematag sawah belum ada sehingga <br> sulit mengatur air</td>
                <td class="text-sm">Gapoktan, kelompok tani, tenaga pekerja</td>
              </tr>
              <tr>
                <td class="text-sm">10</td>
                <td class="text-sm ">Alat pemanen padi belum ada </td>
                <td class="text-sm">Gapoktan, kelompok tani, tenaga pekerja</td>
              </tr>
              <tr>
                <td class="text-sm">11</td>
                <td class="text-sm ">masih banyak lahan tidur yang tidak <br> tergarap karena keterbatasan dana</td>
                <td class="text-sm">Gapoktan, kelompok tani, tenaga pekerja, <br>hand traktor</td>
              </tr>
              <tr>
                <td class="text-sm">12</td>
                <td class="text-sm ">Kelompok tani merica tidak aktif</td>
                <td class="text-sm">Gapoktan, kelompok tani, PPL, <br> kebun merica</td>
              </tr>
              <tr>
                <td class="text-sm">13</td>
                <td class="text-sm ">Lahan petani merica tidak bersertifikat</td>
                <td class="text-sm">Lahan kebun merica, gapoktan, kelompok tani, <br> tenaga swadaya</td>
              </tr>
              <tr>
                <td class="text-sm">14</td>
                <td class="text-sm ">Petani kesulitan mendapatkan bibit <br> unggul merica</td>
                <td class="text-sm">Gapoktan, kelompok tani, PPL, <br> kebun merica</td>
              </tr>
              <tr>
                <td class="text-sm">15</td>
                <td class="text-sm ">Petani merica kurang paham cara <br> mengendalikan hama terpadu</td>
                <td class="text-sm">Gapoktan, kelompok tani, PPL, <br> kebun merica</td>
              </tr>
              <tr>
                <td class="text-sm">16</td>
                <td class="text-sm ">Petani kesulitan mendapatkan bibit <br> unggul durina</td>
                <td class="text-sm">Kelompok tani, gapoktan, PPL</td>
              </tr>
              <tr>
                <td class="text-sm">17</td>
                <td class="text-sm ">Petani kesulitan mendapatkan bibit <br> unggul tanaman Lingking</td>
                <td class="text-sm">Kelompok tani, gapoktan, PPL</td>
              </tr>
              <tr>
                <td class="text-sm">18</td>
                <td class="text-sm ">Petani kesulitan mendapatkan bibit <br> unggul tanaman Nilam</td>
                <td class="text-sm">Kelompok tani, gapoktan, PPL</td>
              </tr>
              <tr>
                <td class="text-sm">19</td>
                <td class="text-sm ">Petani kesulitan mendapatkan bibit <br> unggul tanaman gaharu</td>
                <td class="text-sm">Kelompok tani, gapoktan, PPL</td>
              </tr>
              <tr>
                <td class="text-sm">20</td>
                <td class="text-sm ">Petani kesulitan mendapatkan bibit <br> unggul tanaman bawang merah</td>
                <td class="text-sm">Kelompok tani, gapoktan, PPL</td>
              </tr>
              <tr>
                <td class="text-sm">21</td>
                <td class="text-sm ">Petani kesulitan dalam penyemprotan lahan <br>  karena sebagian petani hanya <br> meminjam tangki semprot </td>
                <td class="text-sm">Kelompok tani, gapoktan, PPL</td>
              </tr>
              <tr>
                <td class="text-sm">22</td>
                <td class="text-sm ">Petani kesulitan mendapatkan bibit <br> unggul tanaman kelengkeng</td>
                <td class="text-sm">Kelompok tani, gapoktan, PPL</td>
              </tr>
              <tr>
                <td class="text-sm">23</td>
                <td class="text-sm ">Pengurus Gapoktan belum bisa <br> mengelola keuangan dengan baik</td>
                <td class="text-sm">Kelompok tani, gapoktan, PPL</td>
              </tr>
              <tr>
                <td class="text-sm">24</td>
                <td class="text-sm ">Pada musim hujan tanaman padi banyak <br> yang terendam banjir jika kemarau <br> sawah kering</td>
                <td class="text-sm">Kelompok tani, gapoktan, kayu, tukang, <br> tenaga pekerja, batu, tanah urug, sungai</td>
              </tr>
              <tr>
                <td class="text-sm">25</td>
                <td class="text-sm ">Jalan usaha tani</td>
                <td class="text-sm">Batu kapur, tanah urug, tenaga pekerja</td>
              </tr>
              <tr>
                <td class="text-sm">26</td>
                <td class="text-sm ">Irigasi dan saluran pembawa</td>
                <td class="text-sm">Batu kapur, tanah urug, tenaga pekerja, <br> tukang kayu</td>
              </tr>
              <tr>
                <td class="text-sm">27</td>
                <td class="text-sm ">Hand Traktor</td>
                <td class="text-sm">Gapoktan, lahan sawah</td>
              </tr>
              <tr>
                <td class="text-sm">28</td>
                <td class="text-sm ">Saprodi</td>
                <td class="text-sm">Gapoktan, lahan sawah</td>
              </tr>
              <tr>
                <td class="text-sm">29</td>
                <td class="text-sm ">Mesin perontok padi</td>
                <td class="text-sm">Gapoktan, lahan sawah</td>
              </tr>
              <tr>
                <td class="text-sm">30</td>
                <td class="text-sm ">Bibit karet</td>
                <td class="text-sm">Gapoktan, lahan perkebunan</td>
              </tr>
              <tr>
                <td class="text-sm">31</td>
                <td class="text-sm ">Bibit lada</td>
                <td class="text-sm">Gapoktan, lahan perkebunan</td>
              </tr>
              <tr>
                <td class="text-sm">32</td>
                <td class="text-sm ">SLPHT Lada</td>
                <td class="text-sm">Gapoktan, lahan perkebunan</td>
              </tr>

              <tr><td class="text-center text-sm font-weight-bold table-info" colspan="3">B. Peternakan</td></tr>

              <tr>
                <td class="text-sm">1</td>
                <td class="text-sm ">Bibit sapi masih belum mencukupi</td>
                <td class="text-sm">Kelompok peternak, lahan, PPL</td>
              </tr>
              <tr>
                <td class="text-sm">2</td>
                <td class="text-sm ">Masih ada peternak yang belum <br> memiliki pagar kawat besi</td>
                <td class="text-sm">Kelompok peternak, lahan, kayu</td>
              </tr>
              <tr>
                <td class="text-sm">3</td>
                <td class="text-sm ">Tidak ada bibir sapi yang unggul jenis</td>
                <td class="text-sm">Kelompok peternak, lahan, PPL</td>
              </tr>
              <tr>
                <td class="text-sm">4</td>
                <td class="text-sm ">Masih ada peternak yang belum memiliki <br> pagar kawat sapi</td>
                <td class="text-sm">Kelompok peternak, lahan, kayu</td>
              </tr>
              <tr>
                <td class="text-sm">5</td>
                <td class="text-sm ">Peternak tak memiliki dana dalam <br> pengadaan bibit kambing unggul</td>
                <td class="text-sm">Kelompok peternak, lahan, PPL</td>
              </tr>
              <tr>
                <td class="text-sm">6</td>
                <td class="text-sm ">Peternak tak memiliki dana dalam <br> pengadaan bibit ayam unggul</td>
                <td class="text-sm">Kelompok peternak, lahan, PPL</td>
              </tr>
              <tr>
                <td class="text-sm">7</td>
                <td class="text-sm ">Peternak tak memiliki dana dalam <br> pengadaan bibit bebek unggul</td>
                <td class="text-sm">Kelompok peternak, lahan, PPL</td>
              </tr>
              <tr>
                <td class="text-sm">8</td>
                <td class="text-sm ">Ternak kambing</td>
                <td class="text-sm">Kelompok peternak, kandang</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

{{-- <div class="row">
  <h5 class="ms-3">Pendidikan</h5>
  <div class="col-lg-3 mb-lg-0 mb-4">
    <div class="card h-100">
      <div class="card-header bg-transparent p-0 mx-4 mt-3">
        <a href="" class="d-block">
          <img src="{{url('backend/assets/img/img1.jpg')}}" class="img-fluid border-radius-xl mb-3" width="300" height="300" alt="ilustrasi sampah">
        </a>
        <h6 class="text-gradient text-primary text-uppercase font-weight-bold">Potensi</h6>
      </div>
      <div class="card-body py-0">
        <a class="card-title h5 d-block text-darker">
          Atraksi Budaya
        </a>
        <p class="card-description">
          Atraksi budaya yang dilakukan turun temurun dari tetua kampung kami .
        </p>
      </div>
    </div>
  </div>
  <div class="col-lg-3 mb-lg-0 mb-4">
    <div class="card  h-100">
      <div class="card-header bg-transparent p-0 mx-4 mt-3">
        <h6 class="text-gradient text-primary text-uppercase font-weight-bold">Potensi</h6>
      </div>
      <div class="card-body py-0">
        <a class="card-title h5 d-block text-darker">
          Air Terjun
        </a>
        <p class="card-description">
          Air terjun berikut ekosistem di sekitarnya yang masih terjaga dengan baik.
        </p>
      </div>
    </div>
  </div>
</div>
<div class="row mt-4">
  <div class="col-lg-4 mb-lg-0 mb-4">
    <div class="card  h-100">
      <div class="card-header bg-transparent p-0 mx-4 mt-3">
        <h6 class="text-gradient text-primary text-uppercase font-weight-bold">Tantangan</h6>
      </div>
      <div class="card-body py-0">
        <a class="card-title h5 d-block text-darker">
          Sampah
        </a>
        <p class="card-description">
          Sampah rumah tangga dan industry yang belum terkelola dengan baik, sehingga menimbulkan dampak negative di beberapa titik.
        </p>
      </div>
    </div>
  </div>
  <div class="col-lg-4 mb-lg-0 mb-4">
    <div class="card  h-100">
      <div class="card-header bg-transparent p-0 mx-4 mt-3">
        <h6 class="text-gradient text-primary text-uppercase font-weight-bold">Tantangan</h6>
      </div>
      <div class="card-body py-0">
        <a class="card-title h5 d-block text-darker">
          Ekonomi
        </a>
        <p class="card-description">
          Kesenjangan ekonomi antara penduduk asli dengan pendatang, serta tingginya angka pengangguran pada usia produktif.
        </p>
      </div>
    </div>
  </div>
</div> --}}

{{-- Potensi --}}
{{-- <div class="row">
  <h5 class="ms-3 mb-3">Potensi</h5>
  @forelse ($getdatapotensi as $item)
  <div class="col-lg-4 mb-lg-0 mb-4">
    <div class="card h-100">
      <div class="card-header bg-transparent p-0 mx-4 mt-3">
        <button class="btn btn-sm btn-info btn-icon mt-0 btn-3 mb-sm-2 ms-auto" data-bs-toggle="modal" data-bs-target="#modal-form">
          <span class="btn-inner--text">Ubah</span>
        </button>
        <button type="submit" class="btn btn-sm btn-danger btn-icon mt-0 btn-3 mb-sm-2 ms-auto">
          <span class="btn-inner--text">Hapus</span>
        </button>
        <a href="" class="d-block">
          <img src="{{ asset('storage/'.$item->gambar_tdp) }}" class="img-fluid border-radius-xl mb-3" width="300" height="300" alt="ilustrasi sampah">
        </a>
      </div>
      <div class="card-body py-0">
        @if ($item->kategori_tdp = 2)
        <span class="text-gradient text-primary text-uppercase text-xs font-weight-bold">Potensi</span>
        @endif
        <a class="card-title h5 d-block text-darker text-capitalize">
          {{$item->judul_tdp}}
        </a>
        <p class="card-description">
          {{$item->desc_tdp}}
        </p>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
      <div class="modal-content">
        <div class="modal-body p-0">
          <div class="card card-plain">
            <div class="card-header pb-0 text-left">
              <h3 class="font-weight-bolder text-info text-gradient">Ubah Data Modal</h3>
            </div>
            <div class="card-body">
              <form role="form text-left" action="{{route('officer.editsettdp', $item->id)}}" enctype="multipart/form-data" method="POST">
                @method('put')
                @csrf
                <label>Gambar</label>
                <div class="input-group mb-3">
                  <input type="file" name="gambar_tdp" id="gambar_tdp" class="form-control" >
                </div>
                <label>Judul</label>
                <div class="input-group mb-3">
                  <input type="text" name="judul_tdp" id="judul_tdp" class="form-control" placeholder="Judul" >
                </div>
                <label>Deskripsi</label>
                <div class="input-group mb-3">
                  <input type="text" name="desc_tdp" id="desc_tdp" class="form-control" placeholder="Deskripsi" >
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">Ubah Data</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @empty

  @endforelse
</div> --}}

{{-- Tantangan --}}
{{-- <div class="row mt-4">
  <h5 class="ms-3">Tantangan</h5>
  @forelse ($getdatatantangan as $item)
  <div class="col-lg-4 mb-lg-0 mb-4">
    <div class="card  h-100">
      <div class="card-header bg-transparent p-0 mx-4 mt-3">
        <button class="btn btn-sm btn-info btn-icon mt-0 btn-3 mb-sm-2 ms-auto" data-bs-toggle="modal" data-bs-target="#modal-form2">
          <span class="btn-inner--text">Ubah</span>
        </button>
        <button type="submit" class="btn btn-sm btn-danger btn-icon mt-0 btn-3 mb-sm-2 ms-auto">
          <span class="btn-inner--text">Hapus</span>
        </button>
        <a href="" class="d-block">
          <img src="{{ asset('storage/'.$item->gambar_tdp) }}" class="img-fluid border-radius-xl mb-3" width="300" height="300" alt="ilustrasi sampah">
        </a>
      </div>
      <div class="card-body py-0">
        @if ($item->kategori_tdp = 1)
        <span class="text-gradient text-primary text-uppercase text-xs font-weight-bold">Tantangan</span>
        @endif
        <a class="card-title h5 d-block text-darker text-capitalize">
          {{$item->judul_tdp}}
        </a>
        <p class="card-description">
          {{$item->desc_tdp}}
        </p>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modal-form2" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
      <div class="modal-content">
        <div class="modal-body p-0">
          <div class="card card-plain">
            <div class="card-header pb-0 text-left">
              <h3 class="font-weight-bolder text-info text-gradient">Ubah Data Modal</h3>
            </div>
            <div class="card-body">
              <form role="form text-left" action="{{route('officer.editsettdp', $item->id)}}" enctype="multipart/form-data" method="POST">
                @method('put')
                @csrf
                <label>Gambar</label>
                <div class="input-group mb-3">
                  <input type="file" name="gambar_tdp" id="gambar_tdp" class="form-control" >
                </div>
                <label>Judul</label>
                <div class="input-group mb-3">
                  <input type="text" name="judul_tdp" id="judul_tdp" class="form-control" placeholder="Judul" >
                </div>
                <label>Deskripsi</label>
                <div class="input-group mb-3">
                  <input type="text" name="desc_tdp" id="desc_tdp" class="form-control" placeholder="Deskripsi" >
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">Ubah Data</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @empty

  @endforelse
</div> --}}
{{-- <div class="row mt-4">
  <div class="col-lg-7 mb-lg-0 mb-4">
    <div class="card ">
      <div class="card-header pb-0 p-3">
        <div class="d-flex justify-content-between">
          <h6 class="mb-2">Sales by Country</h6>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table align-items-center ">
          <tbody>
            <tr>
              <td class="w-30">
                <div class="d-flex px-2 py-1 align-items-center">
                  <div>
                    <img src="./assets/img/icons/flags/US.png" alt="Country flag">
                  </div>
                  <div class="ms-4">
                    <p class="text-xs font-weight-bold mb-0">Country:</p>
                    <h6 class="text-sm mb-0">United States</h6>
                  </div>
                </div>
              </td>
              <td>
                <div class="text-center">
                  <p class="text-xs font-weight-bold mb-0">Sales:</p>
                  <h6 class="text-sm mb-0">2500</h6>
                </div>
              </td>
              <td>
                <div class="text-center">
                  <p class="text-xs font-weight-bold mb-0">Value:</p>
                  <h6 class="text-sm mb-0">$230,900</h6>
                </div>
              </td>
              <td class="align-middle text-sm">
                <div class="col text-center">
                  <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                  <h6 class="text-sm mb-0">29.9%</h6>
                </div>
              </td>
            </tr>
            <tr>
              <td class="w-30">
                <div class="d-flex px-2 py-1 align-items-center">
                  <div>
                    <img src="./assets/img/icons/flags/DE.png" alt="Country flag">
                  </div>
                  <div class="ms-4">
                    <p class="text-xs font-weight-bold mb-0">Country:</p>
                    <h6 class="text-sm mb-0">Germany</h6>
                  </div>
                </div>
              </td>
              <td>
                <div class="text-center">
                  <p class="text-xs font-weight-bold mb-0">Sales:</p>
                  <h6 class="text-sm mb-0">3.900</h6>
                </div>
              </td>
              <td>
                <div class="text-center">
                  <p class="text-xs font-weight-bold mb-0">Value:</p>
                  <h6 class="text-sm mb-0">$440,000</h6>
                </div>
              </td>
              <td class="align-middle text-sm">
                <div class="col text-center">
                  <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                  <h6 class="text-sm mb-0">40.22%</h6>
                </div>
              </td>
            </tr>
            <tr>
              <td class="w-30">
                <div class="d-flex px-2 py-1 align-items-center">
                  <div>
                    <img src="./assets/img/icons/flags/GB.png" alt="Country flag">
                  </div>
                  <div class="ms-4">
                    <p class="text-xs font-weight-bold mb-0">Country:</p>
                    <h6 class="text-sm mb-0">Great Britain</h6>
                  </div>
                </div>
              </td>
              <td>
                <div class="text-center">
                  <p class="text-xs font-weight-bold mb-0">Sales:</p>
                  <h6 class="text-sm mb-0">1.400</h6>
                </div>
              </td>
              <td>
                <div class="text-center">
                  <p class="text-xs font-weight-bold mb-0">Value:</p>
                  <h6 class="text-sm mb-0">$190,700</h6>
                </div>
              </td>
              <td class="align-middle text-sm">
                <div class="col text-center">
                  <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                  <h6 class="text-sm mb-0">23.44%</h6>
                </div>
              </td>
            </tr>
            <tr>
              <td class="w-30">
                <div class="d-flex px-2 py-1 align-items-center">
                  <div>
                    <img src="./assets/img/icons/flags/BR.png" alt="Country flag">
                  </div>
                  <div class="ms-4">
                    <p class="text-xs font-weight-bold mb-0">Country:</p>
                    <h6 class="text-sm mb-0">Brasil</h6>
                  </div>
                </div>
              </td>
              <td>
                <div class="text-center">
                  <p class="text-xs font-weight-bold mb-0">Sales:</p>
                  <h6 class="text-sm mb-0">562</h6>
                </div>
              </td>
              <td>
                <div class="text-center">
                  <p class="text-xs font-weight-bold mb-0">Value:</p>
                  <h6 class="text-sm mb-0">$143,960</h6>
                </div>
              </td>
              <td class="align-middle text-sm">
                <div class="col text-center">
                  <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                  <h6 class="text-sm mb-0">32.14%</h6>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="col-lg-5">
    <div class="card">
      <div class="card-header pb-0 p-3">
        <h6 class="mb-0">Categories</h6>
      </div>
      <div class="card-body p-3">
        <ul class="list-group">
          <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
            <div class="d-flex align-items-center">
              <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                <i class="ni ni-mobile-button text-white opacity-10"></i>
              </div>
              <div class="d-flex flex-column">
                <h6 class="mb-1 text-dark text-sm">Devices</h6>
                <span class="text-xs">250 in stock, <span class="font-weight-bold">346+ sold</span></span>
              </div>
            </div>
            <div class="d-flex">
              <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
            </div>
          </li>
          <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
            <div class="d-flex align-items-center">
              <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                <i class="ni ni-tag text-white opacity-10"></i>
              </div>
              <div class="d-flex flex-column">
                <h6 class="mb-1 text-dark text-sm">Tickets</h6>
                <span class="text-xs">123 closed, <span class="font-weight-bold">15 open</span></span>
              </div>
            </div>
            <div class="d-flex">
              <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
            </div>
          </li>
          <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
            <div class="d-flex align-items-center">
              <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                <i class="ni ni-box-2 text-white opacity-10"></i>
              </div>
              <div class="d-flex flex-column">
                <h6 class="mb-1 text-dark text-sm">Error logs</h6>
                <span class="text-xs">1 is active, <span class="font-weight-bold">40 closed</span></span>
              </div>
            </div>
            <div class="d-flex">
              <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
            </div>
          </li>
          <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
            <div class="d-flex align-items-center">
              <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                <i class="ni ni-satisfied text-white opacity-10"></i>
              </div>
              <div class="d-flex flex-column">
                <h6 class="mb-1 text-dark text-sm">Happy users</h6>
                <span class="text-xs font-weight-bold">+ 430</span>
              </div>
            </div>
            <div class="d-flex">
              <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div> --}}
