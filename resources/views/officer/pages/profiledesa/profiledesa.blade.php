@extends('officer.layouts.app')

@section('title')
Profil Desa
@endsection

@section('content')
{{-- Foto Kampung --}}
<div class="row">
  <div class="col-lg-12 mb-lg-0">
    <div class="card">
      <div class="card-body p-0 bg-transparent">
        <div class="row">
          <div class="col-lg-12">
            {{-- @if ($setprofile != null)
            <img src="{{ asset('storage/'.$setprofile->img_desa) }}" class="img-fluid border-radius-xl" alt="foto kampung">
            @else
            <img src="" class="img-fluid border-radius-xl" alt="foto kampung">
            @endif --}}

            <img src="{{url('frontend/assets/img/2.jpg')}}" class="img-fluid border-radius-xl" alt="foto kampung">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- Video dan Deskripsi --}}
<div class="row mt-4">
  <div class="col-lg-6 mb-lg-0 mb-4">
    <div class="card  h-100">
      <div class="card-body pb-0 pt-3 bg-transparent">
        <div class="row">
          {{-- <div class="col-lg-5">
            <h6 class="text-capitalize">Video Desa</h6>
            <div class="ratio ratio-16x9">
              @if ($setprofile != null)
              <iframe width="300" height="220" src="{{$setprofile->video_desa}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              @else
              <iframe width="300" height="220" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              @endif
            </div>
          </div> --}}
          <div class="col-lg-12">
            <i class="fa text-warning fa-history" aria-hidden="true"></i>
            <h5 class="text-capitalize">Sejarah Kampung</h5>
            <p class="mb-3">
              {{-- @if ($setprofile != null)
              {{$setprofile->sejarah_kampung}}
              @else

              @endif --}}
              Pada awalnya Kampung Biatan Lempake bernama Kampung Selengkop dengan Kepala Kampung Bapak Musi dan Sekretaris Antonius Kotin yang menjabat dari tahun 1963-1973. Pada tahun 1964 Bapak Musi di gantikan oleh Bapak Antonius, di akhir tahun itupula Perusahaan Kayu PT. Gonfu mulai mendarat di Kampung Karangan (Muara Bajo) dan mulai beroprasi di kampung tersebut.
              <br>
              Diawal tahun 1975 Perusahaan PT Gonfu mulai mengembangkan sayapnya di Biatan Laut yang sekarang Muara Biatan dan terus mengembangkan sayapnya dan sampai ke Biatan Lempake, disitulah cikal bakal awal Kampung Lempake sekarang. Kurang lebih sebulan PT. Gonfu menginjakkan kaki di Lempake, maka pembangunan Tapak atau perumahan mulai dibangun dan menjadi kampung sampai sekarang.
              <br>
              Pertengahan tahun 1875 PT. Gonfu mulai beroperasi dan tahun itu pula langsung berproduksi membabat hutan di Lempake dan sekitarnya hingga habis. Tahun-tahun berikutnya PT. Gonfu beroperasi dengan lancar maka orang-orang di sekitar Kampung dan orang-orang luar kampung mulai berdatangan dan membuat pondok disekitar lokasi Perusahaan sehingga ramailah perusahaan PT. Gonfu.
              <br>
              Dengan di motori oleh tiga orang tokoh masyarakat: Petta Hemma, Arbain dan Alias Salam. Membuat pondok disekitar perusahaan dan yang menjadi batas antara pondok mereka dan perusahaan adalah jalanan. PT. Gonfu telah berjalan selama satu tahun makin banyak pula pondok yang berdiri di sekitar perusahaan terutama orang-orang Karagan. Maka dengan prakarsa Bapak Camat Talisayan pada waktu itu adalah Bapak Ngatimin.K, Kapolsek Bapak Abdul Kadir dan Koramil Bapak Anton mulai menata pondok-pondok orang yang ada di sekitar prusahaan. Pada tahun 1978 yang tadinya kantor Kepala Kampung berada di Selengkop dalam di pindah keluar (Lempake) yang pada saat itu menjabat Kepala Kampung adalah Bapak Antonius Kotin dan Sekretaris Kampung adalah Bapak Sainuddin. Diawal tahun 1978 Bapak Antonius Kotin meninggal dunia, maka Bapak Sainuddin diangkat menjadi Pejabat Sementara (PJS). Pada tahun1981
              akhir, dilantiklah Bapak Alias Salam sebagai Kepala Kampung dan Sekretaris Kampung Bapak Sainuddin.
              <br>
              Seiring berjalannya waktu PT. Gonfu mulai melirik tempat lain untuk memperluas arealnya, maka pada tahun 1984 PT. Gonfu pindah ke Lenggo Kecamatan Batu Putih sekarang dan digantikan oleh PT. Sumalindo, berjalan selama 3 tahun yaitu 1984-1987 dan pada akhirnya PT. Sumalindo tutup dan semua rumah-rumah karyawan dikuasakan kepada tokoh masyarakat atas nama masyarakat pada saat itu Bapak Petta Hemma, kemudian dibagikan kepada orang- orang yang pindah ke Lempake sehingga Kampung bertambah ramai.
              <br>
              Pada tahun 1987, tahun dimana Kampung mengalami pergantian sekretaris dengan Bapak Suparni yang bertahan selama 2 tahun. Pada awal 1989 Bapak Alias Salam berhenti menjadi Kepala Kampung dan digantikan oleh Bapak Suparni sebagai PJS dan berlaku selama 2 tahun.
              <br>
              Tahun 2001 awal, terjadi pemilihan Kepala Kampung, yang terpilih adalah Bapak Nampiyu dengan Sekretaris adalah Bapak M.Ali, 2 tahun kemudian bapak
              M. Ali mengundurkan diri diganti oleh Bapak Andi Resmin. Tahun 2006 akhir terjadi pemilihan Kepala Kampung lagi dan yang terpilih adalah Bapak Andi Resmin, tidak lama kemudian tepatnya tahun 2007 Andi Resmin mengundurkan diri menjadi kepala kampung dan digantikan oleh sekretaris sebagai pejabat sementara yaitu Bapak Andi Asri. Satu tahun kemudian terjadi pemilihan kepala kampung dan dimenangkan oleh Bapak Andi Muliadi dan sekretaris Bapak Andi Asri dan dijabat oleh (PJS) Baihaqi selama 1 tahun 5 bulan kemudian diadakan pemilihan dan terpilihlah Bapak Andi Muliadi hingga sekarang.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-6 mb-lg-0">
    <div class="card px-0 mb-4">
      <div class="card-body pb-0 pt-3 bg-transparent">
        <i class="fa text-warning fa-clock-o" aria-hidden="true"></i>
        <h5 class="text-capitalize">Sejarah Pemerintahan</h5>
        <p>
          Menurut sumber yang telah dihimpun dari tokoh masyarakat yang paling awal menempati Lokasi Kampung Biatan Lempake, sepanjang sejarahnya telah dipimpin oleh:
        </p>
      </div>
    </div>
    <ol class="gradient-list">
      <li>  Kepala Kampung	: Antonius Kotin </li>
      <li>  PJS	: Sainuddin </li>
      <li>  Kepala Kampung	: Alias Salam </li>
      <li>  PJS	: Suparni </li>
      <li>  Kepala Kampung	:Nampiyu </li>
      <li>  Kepala Kampung	: Andi Resmin </li>
      <li>  PJS	: Andi Asri </li>
      <li>  Kepala Kampung	:  Muliadi </li>
      <li>  PJS	:Baihaqi </li>
      <li>  Kepala Kampung	: AndiMuliadi </li>
    </ol>
    <div class="card px-0 mb-4">
      <div class="card-body pb-0 pt-3 bg-transparent">
        <i class="fa text-warning fa-money" aria-hidden="true"></i>
        <h5 class="text-capitalize">Keadaan Ekonomi dan Potensi Mendatang</h5>
        <p>
          Sebagian besar warga Kampung Biatan Lempake merupakan kaum golongan menengah kebawah yang mayoritas bekerja sebagai petani atau pekebun, wiraswasta, pedagang dan buruh kerja atau karyawan. Jumlah penghasilan per bulan yang mereka dapat bervariatif, ada yang kurang dari 1 juta, 1-2 juta, 2-3 juta, dan ada 3 juta keatas. Data survei menunjukkan bahwa 28% warga meraih penghasilan dibawah 1 juta, 37% warga berpenghasilan 1-2 juta, 18% warga berpenghasilan 2 hingga 3 juta dan 17% sisanya mendapatkan penghasilan diatas 3 juta. Meskipun hanya 28% warga yang memiliki penghasilan dibawah 1 juta, namun ada beberapa dari mereka yang memiliki kisaran pendapatan dibawah rata-rata dan beberapa waktu tidak mendapatkan penghasilan dalam satu bulan. Hal ini dikarenakan masih banyak warga yang berpenghasilan tidak menentu akibat kondisi pekerjaan mereka yang tidak stabil. Sementara itu, untuk proses pengeluaran dana yang mereka keluarkan sangat bervariatif juga. Ada yang pengeluarannya stabil dan ada juga sebagian warga yang pengeluarannya melebihi pendapatannya sendiri. Hal ini terjadi akibat banyaknya tanggungan yang harus mereka keluarkan seperti kreditan motor atau barang, biaya uang jajan anak mereka yang bersekolah, serta untuk membayar hutang-hutang yang biasanya merekamiliki.
        </p>
      </div>
    </div>
    {{-- <div class="card px-0">
      <div class="card-body pb-0 pt-3 bg-transparent">
        <i class="fa text-warning fa-envira" aria-hidden="true"></i>
        <h5 class="text-capitalize">Kondisi Pemerintah Kampung</h5>
        <ul class="ps-4">
          <li>	Pembagian Wilayah Kampung
          Pembagian wilayah Kampung Biatan Bapinang dibagi menjadi 3 (tiga) RT, dan masing-masing RT tidak ada pembagian wilayah secara khusus, jadi di setiap RT ada yang mempunyai wilayah pertanian dan perkebunan, sementara pusat Kampung berada di RT 001 (satu) dan RT 002 (dua), setiap RT dipimpin oleh seorang Ketua RT.
          </li>
          <li>	Struktur Organisasi Pemerintah Kampung (SOPK)
          Struktur Organisasi Kampung Biatan Bapinang Kecamatan Biatan selengkapnya disajikan dalam gambar sebagai berikut :
          </li>
        </ul>
      </div>
    </div> --}}
  </div>
</div>

{{-- Struktur Organisasi --}}
<div class="card mt-4">
  <div class="card-body pt-3 bg-transparent">
    <i class="fa text-warning fa-sitemap" aria-hidden="true"></i>
    <h5>Struktur Organisasi Pemerintahan Kampung Biatan Bapinang</h5>
    <div class="row mt-4">
      <div class="col-lg-6 mb-lg-0 mb-4">
        {{-- Pusat --}}
        <div class="card shadow-none">
          <div class="card-header text-uppercase pb-2 pt-2 ps-3 font-weight-bold bg-success text-white">
          Pemerintahan Pusat
          </div>
          <div class="card-body pb-0 pt-2 ps-3">
            <div class="table-responsive">
              <table class="table-borderless align-items-center mb-2">
                <tbody>
                  <tr>
                    <td class="align-middle text-sm">Kepala Kampung</td>
                    <td class="align-middle text-sm">: Muliadi</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Sekretaris Kampung</td>
                    <td class="align-middle text-sm">: Paisal Tulakbar</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Irmayanti</td>
                    <td class="align-middle text-sm">: Kasi Pemerintahan</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Rian Feby</td>
                    <td class="align-middle text-sm">: Kasi Pelayanan</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Patimah Nabilawati</td>
                    <td class="align-middle text-sm">: Kasi Kesejahteraan</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Sarintan</td>
                    <td class="align-middle text-sm">: Kaur TU & Umum</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Karina</td>
                    <td class="align-middle text-sm">: Kaur Keuangan</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Andi Nurhayati</td>
                    <td class="align-middle text-sm">: Kaur Perencanaan</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Surtina Sisnawati</td>
                    <td class="align-middle text-sm">: Staff Administrasi</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Kasma Ernawati</td>
                    <td class="align-middle text-sm">: Staff Perpustakaan</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mb-lg-0 mb-4">
        {{-- BPK --}}
        <div class="card shadow-none">
          <div class="card-header text-uppercase pb-2 pt-2 ps-3 font-weight-bold bg-success text-white">
          Badan Permusyawaratan Kampung
          </div>
          <div class="card-body pb-0 pt-2 ps-3">
            <div class="table-responsive">
              <table class="table-borderless align-items-center mb-2">
                <tbody>
                  <tr>
                    <td class="align-middle text-sm">Kepala BPK</td>
                    <td class="align-middle text-sm">:</td>
                    <td class="align-middle text-sm">Andi Suwardi</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Wakil Ketua</td>
                    <td class="align-middle text-sm">:</td>
                    <td class="align-middle text-sm">Anjas</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Sekretsris</td>
                    <td class="align-middle text-sm">:</td>
                    <td class="align-middle text-sm">Mariani</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Anggota</td>
                    <td class="align-middle text-sm">:</td>
                    <td class="align-middle text-sm">
                      Ida Royani
                      <br>
                      Santalia
                      <br>
                      Irmayanti
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-lg-4 mt-0">
      <div class="col-lg-6 mb-lg-0 mb-4">
        {{-- LPM --}}
        <div class="card mb-4 shadow-none">
          <div class="card-header text-uppercase pb-2 pt-2 ps-3 font-weight-bold bg-success text-white">
          Lembaga Pemberdayaan Masyarakat
          </div>
          <div class="card-body pb-0 pt-2 ps-3">
            <div class="table-responsive">
              <table class="table-borderless align-items-center mb-2">
                <tbody>
                  <tr>
                    <td class="align-middle text-sm">Kepala LPM</td>
                    <td class="align-middle text-sm">: Lalu Solihin</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Sekretaris</td>
                    <td class="align-middle text-sm">: Bahriyati</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Bendahara</td>
                    <td class="align-middle text-sm">: Andi Muslimin</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Anggota</td>
                    <td class="align-middle text-sm">: Edi Sukiman</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        {{-- Karangtaruna --}}
        <div class="card mb-4 shadow-none">
          <div class="card-header text-uppercase pb-2 pt-2 ps-3 font-weight-bold bg-success text-white">
          Karang Taruna
          </div>
          <div class="card-body pb-0 pt-2 ps-3">
            <div class="table-responsive">
              <table class="table-borderless align-items-center mb-2">
                <tbody>
                  <tr>
                    <td class="align-middle text-sm">Ketua</td>
                    <td class="align-middle text-sm">:</td>
                    <td class="align-middle text-sm">Andi Heri</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Sekretaris I</td>
                    <td class="align-middle text-sm">:</td>
                    <td class="align-middle text-sm">Abdul Kadir</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Bendahara</td>
                    <td class="align-middle text-sm">:</td>
                    <td class="align-middle text-sm">Edi Sudiro</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Seksi Keagamaan</td>
                    <td class="align-middle text-sm">:</td>
                    <td class="align-middle text-sm">Muhammad Fajri</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Seksi Olahraga</td>
                    <td class="align-middle text-sm">:</td>
                    <td class="align-middle text-sm">Andri</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Seksi Humas</td>
                    <td class="align-middle text-sm">:</td>
                    <td class="align-middle text-sm">Haikal</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Seksi Kesenian</td>
                    <td class="align-middle text-sm">:</td>
                    <td class="align-middle text-sm">Heri Setiawan	</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mb-lg-0">
        {{-- Ketua RT --}}
        <div class="card mb-4 shadow-none">
          <div class="card-header text-uppercase pb-2 pt-2 ps-3 font-weight-bold bg-success text-white">
          Ketua RT
          </div>
          <div class="card-body pb-0 pt-2 ps-3">
            <div class="table-responsive">
              <table class="table-borderless align-items-center mb-2">
                <tbody>
                  <tr>
                    <td class="align-middle text-sm">Ketua RT 01</td>
                    <td class="align-middle text-sm">: Ibung</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Ketua RT 02</td>
                    <td class="align-middle text-sm">: Agus Hendra</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Ketua RT 03</td>
                    <td class="align-middle text-sm">: Darwis</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Ketua RT 04</td>
                    <td class="align-middle text-sm">: Misrawati</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Ketua RT 05</td>
                    <td class="align-middle text-sm">: Edhy Djunaedy</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Ketua RT 06</td>
                    <td class="align-middle text-sm">: Andi Suhayadi</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Ketua RT 07</td>
                    <td class="align-middle text-sm">: Nadira</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        {{-- TP PKK --}}
        <div class="card shadow-none">
          <div class="card-header text-uppercase pb-2 pt-2 ps-3 font-weight-bold bg-success text-white">
          Pengurus Tim Penggerak PKK Kampung
          </div>
          <div class="card-body pb-0 pt-2 ps-3">
            <div class="table-responsive">
              <table class="table-borderless align-items-center mb-2">
                <tbody>
                  <tr>
                    <td class="align-middle text-sm">Ketua</td>
                    <td class="align-middle text-sm">:</td>
                    <td class="align-middle text-sm">May Suriati</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Wakil Ketua I</td>
                    <td class="align-middle text-sm">:</td>
                    <td class="align-middle text-sm">Saripah</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Wakil Ketua II</td>
                    <td class="align-middle text-sm">:</td>
                    <td class="align-middle text-sm">Santalia</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Sekretaris I</td>
                    <td class="align-middle text-sm">:</td>
                    <td class="align-middle text-sm">Karina</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Sekretaris II</td>
                    <td class="align-middle text-sm">:</td>
                    <td class="align-middle text-sm">Mariani</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Bendahara</td>
                    <td class="align-middle text-sm">:</td>
                    <td class="align-middle text-sm">Aswinda</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- Letak Geografis --}}
<div class="row mt-4">
  <div class="col-lg-12 mb-lg-0">
    <div class="card px-0">
      <div class="card-body pb-0 pt-3 bg-transparent">
        <i class="fa text-warning fa-map-marker" aria-hidden="true"></i>
        <h5 class="text-capitalize">Demografi dan Letak Geografis</h5>
        <p>Kampung Biatan Lempake merupakan salah satu kampung yang terdapat di Kecamatan Biatan Kabupaten Berau Provinsi Kalimantan Timur dengan kondisi bujur berada pada 118.012106 dan koordinat lintang berada pada titik 1.669031 dengan luas wilayah di perkirakan sekitar 10.323 Ha. Dengan ketinggian dari permukaan laut dan merupakan daerah pesisir.</p>
        <div class="row">
          <div class="col-lg-5 mb-lg-0 mb-4">
            <ol class="ps-3">
              <li class="font-weight-bold">Kampung Biatan Lempake merupakan salah satu dari 8 Kampung di Kecamatan Biatan Kabupaten Berau Provinsi Kalimantan Timur. Luas wilayah Kampung Biatan Lempake adalah sebagai berikut:</li>
              <table class="table-borderless">
                <tbody>
                  <tr>
                    <td>• Sebelah Utara</td>
                    <td>:</td>
                    <td class="ps-1">Laut</td>
                  </tr>
                  <tr>
                    <td>• Sebelah Timur</td>
                    <td>:</td>
                    <td class="ps-1">Kampung Karangan</td>
                  </tr>
                  <tr>
                    <td>• Sebelah Barat</td>
                    <td>:</td>
                    <td class="ps-1">Kampung Biatan Bapinang</td>
                  </tr>
                  <tr>
                    <td>• Sebelah Selatan</td>
                    <td>:</td>
                    <td class="ps-1">Kampung Biatan Ulu</td>
                  </tr>
                </tbody>
              </table>
            </ol>
          </div>
          <div class="col-lg-7 mb-lg-0 mb-4">
            <ol start="2">
              <li class="font-weight-bold">Orbitasi:</li>
              <table class="table-borderless">
                <tbody>
                  <tr>
                    <td>• Jarak Kampung ke Kecamatan</td>
                    <td>:</td>
                    <td class="ps-1">1 Km</td>
                  </tr>
                  <tr>
                    <td>• Lama tempuh ke kecamatan</td>
                    <td>:</td>
                    <td class="ps-1">15 menit</td>
                  </tr>
                  <tr>
                    <td>• Kendaraan umum ke kecamatan</td>
                    <td>:</td>
                    <td class="ps-1">Sepeda Motor</td>
                  </tr>
                  <tr>
                    <td>• Biaya dari Kampung ke kecamatan</td>
                    <td>:</td>
                    <td class="ps-1">Rp 20.000,-pp</td>
                  </tr>
                  <tr>
                    <td>• Jarak ke Kabupaten</td>
                    <td>:</td>
                    <td class="ps-1">142 Km</td>
                  </tr>
                  <tr>
                    <td>• Lama tempuh ke Kabupaten</td>
                    <td>:</td>
                    <td class="ps-1">360 menit</td>
                  </tr>
                  <tr>
                    <td>• Kendaraan umum ke Kabupaten</td>
                    <td>:</td>
                    <td class="ps-1">Taksi (Kendaraan Sejenis)</td>
                  </tr>
                  <tr>
                    <td>• Biaya dari kampung ke Kabupaten</td>
                    <td>:</td>
                    <td class="ps-1">Rp 200.000,-pp</td>
                  </tr>
                </tbody>
              </table>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- Sarana Prasarana --}}
<div class="card mt-4">
  <div class="card-body pt-3 bg-transparent">
    <i class="fa text-warning fa-briefcase" aria-hidden="true"></i>
    <h5>Sarana Prasarana Kampung</h5>
    <div class="row mt-4">
      <div class="col-lg-12 mb-lg-0">
        <h6><i class="fa text-success fa-road me-2" aria-hidden="true"></i>Jalan</h6>
        <table class="table-borderless">
          <tbody>
            <tr>
              <td class="ps-1">• Jalan Sertu/Tanah</td>
              <td>:</td>
              <td class="ps-1">25 m/km</td>
            </tr>
            <tr>
              <td class="ps-1">• Jalan Aspal Kampung</td>
              <td>:</td>
              <td class="ps-1">1.700 m/km</td>
            </tr>
            <tr>
              <td class="ps-1">• Jalan Usaha Tani</td>
              <td>:</td>
              <td class="ps-1">15 m/km</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-lg-6 mb-lg-0 mb-4">
        <h6><i class="fa text-success fa-graduation-cap me-2" aria-hidden="true"></i>Pendidikan</h6>
        <table class="table-borderless">
          <tbody>
            <tr>
              <td class="ps-2">• Gedung SD</td>
              <td>:</td>
              <td class="ps-1">1 Unit</td>
            </tr>
            <tr>
              <td class="ps-2">• Gedung SMP</td>
              <td>:</td>
              <td class="ps-1">1 Unit</td>
            </tr>
            <tr>
              <td class="ps-2">• Gedung SMA</td>
              <td>:</td>
              <td class="ps-1">-</td>
            </tr>
            <tr>
              <td class="ps-2">• Gedung TK/PAUD</td>
              <td>:</td>
              <td class="ps-1">1 Unit</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-lg-6 mb-lg-0">
        <h6><i class="fa text-success fa-hospital-o me-2" aria-hidden="true"></i>Kesehatan</h6>
        <table class="table-borderless">
          <tbody>
            <tr>
              <td class="ps-2">• Gedung Puskesmas</td>
              <td>:</td>
              <td class="ps-1">1 Unit</td>
            </tr>
            <tr>
              <td class="ps-2">• Gedung Posyandu</td>
              <td>:</td>
              <td class="ps-1">3 Unit</td>
            </tr>
            <tr>
              <td class="ps-2">• Puskesdes</td>
              <td>:</td>
              <td class="ps-1">-</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-lg-6 mb-lg-0 mb-4">
        <h6><i class="fa text-success fa-building me-2" aria-hidden="true"></i>Sarana/Prasarana Lainnya</h6>
        <table class="table-borderless">
          <tbody>
            <tr>
              <td class="ps-2">• Kantor Kampung</td>
              <td>:</td>
              <td class="ps-1">1 Unit</td>
            </tr>
            <tr>
              <td class="ps-2">• Kantor Kepala Kampung</td>
              <td>:</td>
              <td class="ps-1">1 Unit</td>
            </tr>
            <tr>
              <td class="ps-2">• Kantor Terpadu</td>
              <td>:</td>
              <td class="ps-1">1 Unit</td>
            </tr>
            <tr>
              <td class="ps-2">• Kantor BPK</td>
              <td>:</td>
              <td class="ps-1">1 Unit</td>
            </tr>
            <tr>
              <td class="ps-2">• Kantor Bank (BPD/ BRI/ BNI/DLL) </td>
              <td>:</td>
              <td class="ps-1">2 Unit</td>
            </tr>
            <tr>
              <td class="ps-2">• Kantor Pos</td>
              <td>:</td>
              <td class="ps-1">1 Unit</td>
            </tr>
            <tr>
              <td class="ps-2">• WC Umum</td>
              <td>:</td>
              <td class="ps-1">1 Unit</td>
            </tr>
            <tr>
              <td class="ps-2">• Masjid</td>
              <td>:</td>
              <td class="ps-1">3 Unit</td>
            </tr>
            <tr>
              <td class="ps-2">• Gereja</td>
              <td>:</td>
              <td class="ps-1">2 Unit</td>
            </tr>
            <tr>
              <td class="ps-2">• Surau</td>
              <td>:</td>
              <td class="ps-1">1 Unit</td>
            </tr>
            <tr>
              <td class="ps-2">• Pura</td>
              <td>:</td>
              <td class="ps-1">-</td>
            </tr>
            <tr>
              <td class="ps-2">• Balai Pertemuan Adat</td>
              <td>:</td>
              <td class="ps-1">1 Unit</td>
            </tr>
            <tr>
              <td class="ps-2">• Gedung Serbaguna</td>
              <td>:</td>
              <td class="ps-1">1 Unit</td>
            </tr>
            <tr>
              <td class="ps-2">• TPS Sementara</td>
              <td>:</td>
              <td class="ps-1">1 Lokasi</td>
            </tr>

          </tbody>
        </table>
      </div>
      <div class="col-lg-6 mb-lg-0 mb-4">
        <table class="table-borderless">
          <tbody>
            <tr>
              <td class="ps-2">• Lapangan Voli</td>
              <td>:</td>
              <td class="ps-1">2 Lokasi</td>
            </tr>
            <tr>
              <td class="ps-2">• Lapangan Sepak Bola</td>
              <td>:</td>
              <td class="ps-1">1 Lokasi</td>
            </tr>
            <tr>
              <td class="ps-2">• Balai Olahraga</td>
              <td>:</td>
              <td class="ps-1">1 Unit</td>
            </tr>
            <tr>
              <td class="ps-2">• Motor Sampah</td>
              <td>:</td>
              <td class="ps-1">1 Unit</td>
            </tr>
            <tr>
              <td class="ps-2">• Tempat Pemakaman Umum</td>
              <td>:</td>
              <td class="ps-1">2 Lokasi</td>
            </tr>
            <tr>
              <td class="ps-2">• Gang Semenisasi</td>
              <td>:</td>
              <td class="ps-1">1.115 m</td>
            </tr>
            <tr>
              <td class="ps-2">• Pos Kamling</td>
              <td>:</td>
              <td class="ps-1">3 Unit</td>
            </tr>
            <tr>
              <td class="ps-2">• Tower</td>
              <td>:</td>
              <td class="ps-1">2 Unit</td>
            </tr>
            <tr>
              <td class="ps-2">• Jembatan Kayu</td>
              <td>:</td>
              <td class="ps-1">1 Unit</td>
            </tr>
            <tr>
              <td class="ps-2">• Jembatan Besi/Beton</td>
              <td>:</td>
              <td class="ps-1">2 Unit</td>
            </tr>
            <tr>
              <td class="ps-2">• Rumah/Balai Adat</td>
              <td>:</td>
              <td class="ps-1">1 Unit</td>
            </tr>
            <tr>
              <td class="ps-2">• Balai Penyuluhan</td>
              <td>:</td>
              <td class="ps-1">1 Unit</td>
            </tr>
            <tr>
              <td class="ps-2">• Dermaga Kayu/Cor</td>
              <td>:</td>
              <td class="ps-1">2 Unit</td>
            </tr>
            <tr>
              <td class="ps-2">• PDAM</td>
              <td>:</td>
              <td class="ps-1">Ada</td>
            </tr>
            <tr>
              <td class="ps-2">• PLN</td>
              <td>:</td>
              <td class="ps-1">Ada</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

{{-- STATISTIK DESA --}}
{{-- Card Count --}}
<h5 class="mt-4 mb-2">Statistik Desa Biatan Lempake</h5>
<div class="row mb-sm-4">
  <div class="col-lg-12 mb-lg-0 mb-4">
    <div class="card h-100">
      <div class="card-header pb-0 pt-3 bg-transparent">
        <h6 class="text-capitalize">Keadaan Sosial dan Penduduk</h6>
        <p class="mb-3">
          Penduduk Kampung Biatan Lempake berasal dari beragam daerah seperti Jawa, Lombok, Timur, Bugis dan lain sebagainya. Sehingga tradisi-tradisi musyawarah mufakat, gotong royong, kekeluargaan dan kearifan lokal yang lain telah dilakukan sejak berdirinya Kampung Biatan Lempake. Penduduk Biatan Lempake yang Homogen menjadikan hal tersebut menjadi sangat efektif untuk menghindari benturan-benturan antar kelompokmasyarakat.
          Kampung Biatan Lempake mempunyai jumlah penduduk 2.471 jiwa, yang terdiri dari laki-laki : 1.298 jiwa, perempuan : 1.173 jiwa dan terdiri dari 768 KK terbagi dalam 10 (Sepuluh) wilayah RT
        </p>
      </div>
    </div>
  </div>
</div>
<div class="row mb-sm-4">
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Warga</p>
              <h5 class="font-weight-bolder">
               2.471 Jiwa
              </h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
              <i class="fas fa-users text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-uppercase font-weight-bold">Total KK</p>
              <h5 class="font-weight-bolder">
               768 KK
              </h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
              <i class="fas fa-file text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-uppercase font-weight-bold">Laki-Laki</p>
              <h5 class="font-weight-bolder">
               1.298 Jiwa
              </h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
              <i class="fas fa-male text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-uppercase font-weight-bold">Perempuan</p>
              <h5 class="font-weight-bolder">
               1.173 Jiwa
              </h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
              <i class="fas fa-female text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-12 mb-lg-0">
    <div class="card h-100">
      <div class="card-header pb-0 pt-3 bg-transparent">
        <h6 class="text-capitalize mb-0">Jumlah Penduduk Berdasarkan Usia</h6>
      </div>
      <div class="card-body p-3">
        <div class="chart">
          <canvas id="bar-chart" class="chart-canvas" height="300"></canvas>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row mt-4">
  <div class="col-lg-6 mb-lg-0 mb-4">
    <div class="card  h-100">
      <div class="card-header pb-0 pt-3 bg-transparent">
        <h6 class="text-capitalize mb-0">Jumlah Pendudukan Berdasarkan Suku Bangsa</h6>
      </div>
      <div class="card-body p-3">
        <div class="chart">
          <canvas id="pie-chart" class="chart-canvas" height="300"></canvas>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-6 mb-lg-0">
    <div class="card  h-100">
      <div class="card-header pb-0 pt-3 bg-transparent">
        <h6 class="text-capitalize mb-0">Jumlah Pendudukan Berdasarkan Agama</h6>
      </div>
      <div class="card-body p-3">
        <div class="chart">
          <canvas id="pie-chart2" class="chart-canvas" height="300"></canvas>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row mt-4">
  <div class="col-lg-12 mb-lg-0 mb-4">
    <div class="card h-100">
      <div class="card-header pb-0 pt-3 bg-transparent">
        <h6 class="text-capitalize mb-0">Jumlah Penduduk Berdasarkan Tingkat Pendidikan</h6>
      </div>
      <div class="card-body p-3">
        <div class="chart">
          <canvas id="bar-chart2" class="chart-canvas" height="300"></canvas>
        </div>
        <p class="text-xs ps-1 mb-0 font-weight-bold">Keterangan</p>
        <div class="row">
          <div class="col-lg-4 mb-lg-0 mb-4">
            <ul class="mb-0">
              <li class="text-xs">BTK(Belum TK)</li>
              <li class="text-xs">PTK(Pelajar TK)</li>
              <li class="text-xs">TPS(Tidak Pernah Sekolah)</li>
              <li class="text-xs">PSD(Pelajar SD)</li>
              <li class="text-xs">TSD(Tamat SD)</li>
              <li class="text-xs">TTSD(Tidak Tamat SD)</li>
              <li class="text-xs">PSMP(Pelajar SMP)</li>
            </ul>
          </div>
          <div class="col-lg-4 mb-lg-0 mb-4">
            <ul class="mb-0">
              <li class="text-xs">TSMP(Tamat SMP)</li>
              <li class="text-xs">PSMA(Pelajar SMA)</li>
              <li class="text-xs">TSMA(Tamat SMA)</li>
              <li class="text-xs">TD1 (Tamat Diploma 1)</li>
              <li class="text-xs">TD2 (Tamat Diploma 2)</li>
              <li class="text-xs">MD3 (Mahasiswa D3)</li>
            </ul>
          </div>
          <div class="col-lg-4 mb-lg-0 mb-4">
            <ul class="mb-0">
              <li class="text-xs">TD3 (Tamat Diploma 3)</li>
              <li class="text-xs">TD4 (Tamat Diploma 4)</li>
              <li class="text-xs">MS1 (Mahasiswa S1)</li>
              <li class="text-xs">TS1 (Tamat S1)</li>
              <li class="text-xs">TS2 (Tamat S2)</li>
              <li class="text-xs">TSLB (Tamat SLB)</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row mt-4">
  <div class="col-lg-12 mb-lg-0">
    <div class="card h-100">
      <div class="card-header pb-0 pt-3 bg-transparent">
        <h6 class="text-capitalize mb-0">Jumlah Penduduk Berdasarkan Pekerjaan</h6>
      </div>
      <div class="card-body">
        <table class="table table-bordered align-items-center mb-2">
          <thead>
            <tr>
              <th class="px-2">Pendidikan</th>
              <th class="px-2">Laki-laki</th>
              <th class="px-2">Perempuan</th>
              <th class="px-2">Jumlah</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="align-middle text-sm">Petani</td>
              <td class="align-middle text-sm">281</td>
              <td class="align-middle text-sm">9</td>
              <td class="align-middle text-sm">290</td>
            </tr>
            <tr>
              <td class="align-middle text-sm">Buruh Tani</td>
              <td class="align-middle text-sm">8</td>
              <td class="align-middle text-sm">1</td>
              <td class="align-middle text-sm">9</td>
            </tr>
            <tr>
              <td class="align-middle text-sm">Pegawai Negeri Sipil</td>
              <td class="align-middle text-sm">12</td>
              <td class="align-middle text-sm">14</td>
              <td class="align-middle text-sm">26</td>
            </tr>
            <tr>
              <td class="align-middle text-sm">Pedagang barang kelontong</td>
              <td class="align-middle text-sm">5</td>
              <td class="align-middle text-sm">1</td>
              <td class="align-middle text-sm">6</td>
            </tr>
            <tr>
              <td class="align-middle text-sm">Nelayan</td>
              <td class="align-middle text-sm">48</td>
              <td class="align-middle text-sm">0</td>
              <td class="align-middle text-sm">48</td>
            </tr>
            <tr>
              <td class="align-middle text-sm">Montir</td>
              <td class="align-middle text-sm">2</td>
              <td class="align-middle text-sm">0</td>
              <td class="align-middle text-sm">2</td>
            </tr>
            <tr>
              <td class="align-middle text-sm">Perawat swasta</td>
              <td class="align-middle text-sm">1</td>
              <td class="align-middle text-sm">1</td>
              <td class="align-middle text-sm">2</td>
            </tr>
            <tr>
              <td class="align-middle text-sm">Bidan swasta</td>
              <td class="align-middle text-sm">1</td>
              <td class="align-middle text-sm">2</td>
              <td class="align-middle text-sm">3</td>
            </tr>
            <tr>
              <td class="align-middle text-sm">TNI</td>
              <td class="align-middle text-sm">2</td>
              <td class="align-middle text-sm">0</td>
              <td class="align-middle text-sm">2</td>
            </tr>
            <tr>
              <td class="align-middle text-sm">Pengusaha kecil, menengah dan besar</td>
              <td class="align-middle text-sm">3</td>
              <td class="align-middle text-sm">2</td>
              <td class="align-middle text-sm">5</td>
            </tr>
            <tr>
              <td class="align-middle text-sm">Guru swasta</td>
              <td class="align-middle text-sm">5</td>
              <td class="align-middle text-sm">5</td>
              <td class="align-middle text-sm">10</td>
            </tr>
            <tr>
              <td class="align-middle text-sm">Pedagang Keliling</td>
              <td class="align-middle text-sm">1</td>
              <td class="align-middle text-sm">2</td>
              <td class="align-middle text-sm">3</td>
            </tr>
            <tr>
              <td class="align-middle text-sm">Tukang Kayu</td>
              <td class="align-middle text-sm">1</td>
              <td class="align-middle text-sm">0</td>
              <td class="align-middle text-sm">1</td>
            </tr>
            <tr>
              <td class="align-middle text-sm">Karyawan Perusahaan Swasta</td>
              <td class="align-middle text-sm">213</td>
              <td class="align-middle text-sm">19</td>
              <td class="align-middle text-sm">232</td>
            </tr>
            <tr>
              <td class="align-middle text-sm">Karyawan Perusahaan Pemerintah</td>
              <td class="align-middle text-sm">1</td>
              <td class="align-middle text-sm">0</td>
              <td class="align-middle text-sm">1</td>
            </tr>
            <tr>
              <td class="align-middle text-sm">Wiraswasta</td>
              <td class="align-middle text-sm">23</td>
              <td class="align-middle text-sm">3</td>
              <td class="align-middle text-sm">27</td>
            </tr>
            <tr>
              <td class="align-middle text-sm">Tidak Mempunyai Pekerjaan Tetap</td>
              <td class="align-middle text-sm">0</td>
              <td class="align-middle text-sm">1</td>
              <td class="align-middle text-sm">1</td>
            </tr>
            <tr>
              <td class="align-middle text-sm">Belum Bekerja</td>
              <td class="align-middle text-sm">213</td>
              <td class="align-middle text-sm">175</td>
              <td class="align-middle text-sm">388</td>
            </tr>
            <tr>
              <td class="align-middle text-sm">Pelajar</td>
              <td class="align-middle text-sm">393</td>
              <td class="align-middle text-sm">339</td>
              <td class="align-middle text-sm">732</td>
            </tr>
            <tr>
              <td class="align-middle text-sm">Ibu Rumah Tangga</td>
              <td class="align-middle text-sm">5</td>
              <td class="align-middle text-sm">575</td>
              <td class="align-middle text-sm">580</td>
            </tr>
            <tr>
              <td class="align-middle text-sm">Purnawirawan/Pensiunan</td>
              <td class="align-middle text-sm">1</td>
              <td class="align-middle text-sm">0</td>
              <td class="align-middle text-sm">1</td>
            </tr>
            <tr>
              <td class="align-middle text-sm">Perangkat Desa</td>
              <td class="align-middle text-sm">8</td>
              <td class="align-middle text-sm">6</td>
              <td class="align-middle text-sm">14</td>
            </tr>
            <tr>
              <td class="align-middle text-sm">Buruh Harian Lepas</td>
              <td class="align-middle text-sm">34</td>
              <td class="align-middle text-sm">1</td>
              <td class="align-middle text-sm">35</td>
            </tr>
            <tr>
              <td class="align-middle text-sm">Pengusaha perdagangan hasil bumi</td>
              <td class="align-middle text-sm">1</td>
              <td class="align-middle text-sm">0</td>
              <td class="align-middle text-sm">1</td>
            </tr>
            <tr>
              <td class="align-middle text-sm">Pemilik usaha hotel dan penginapan lainnya</td>
              <td class="align-middle text-sm">1</td>
              <td class="align-middle text-sm">0</td>
              <td class="align-middle text-sm">1</td>
            </tr>
            <tr>
              <td class="align-middle text-sm">Pemilik usaha warung, rumah makan dan Restoran</td>
              <td class="align-middle text-sm">0</td>
              <td class="align-middle text-sm">4</td>
              <td class="align-middle text-sm">4</td>
            </tr>
            <tr>
              <td class="align-middle text-sm">Sopir</td>
              <td class="align-middle text-sm">19</td>
              <td class="align-middle text-sm">0</td>
              <td class="align-middle text-sm">19</td>
            </tr>
            <tr>
              <td class="align-middle text-sm">Tukang Kue</td>
              <td class="align-middle text-sm">0</td>
              <td class="align-middle text-sm">1</td>
              <td class="align-middle text-sm">1</td>
            </tr>
            <tr>
              <td class="align-middle text-sm">Karyawan Honorer</td>
              <td class="align-middle text-sm">14</td>
              <td class="align-middle text-sm">12</td>
              <td class="align-middle text-sm">26</td>
            </tr>
            <tr>
              <td class="align-middle text-sm">Pialang</td>
              <td class="align-middle text-sm">2</td>
              <td class="align-middle text-sm">0</td>
              <td class="align-middle text-sm">2</td>
            </tr>
            <tr>
              <td class="align-middle text-sm">Jumlah</td>
              <td class="align-middle text-sm">1.298</td>
              <td class="align-middle text-sm">1.173</td>
              <td class="align-middle text-sm">2.471</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

{{-- Card Count --}}
{{-- <h5 class="mt-4 mb-2">Statistik User Web Biatan Lempake</h5>
<div class="row mb-sm-4">
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Warga</p>
              <h5 class="font-weight-bolder">
               {{$total_warga->ktp}}
              </h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
              <i class="fas fa-users text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-uppercase font-weight-bold">Total KK</p>
              <h5 class="font-weight-bolder">
               {{$total_warga->domisili}}
              </h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
              <i class="fas fa-file text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-uppercase font-weight-bold">Laki-Laki</p>
              <h5 class="font-weight-bolder">
               {{$kelamin->laki}}
              </h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
              <i class="fas fa-male text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-uppercase font-weight-bold">Perempuan</p>
              <h5 class="font-weight-bolder">
               {{$kelamin->perempuan}}
              </h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
              <i class="fas fa-female text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-4 mb-lg-0 mb-4">
    <div class="card  h-100">
      <div class="px-3">

      </div>
      <div class="px-3">
        <button class="btn btn-sm btn-warning btn-icon btn-3 mt-3 mb-sm-0" data-bs-toggle="modal" data-bs-target="#modal-form">
          <span class="btn-inner--text">Tambah</span>
        </button>
        <a href="{{route('officer.chart_edit_page')}}" class="btn text-white btn-sm btn-warning btn-icon btn-3 mt-3 mb-sm-0 text-decoration-none">
          <span class="btn-inner--text">Edit Data</span>
        </a>
      </div>
      <div class="card-header pb-0 pt-3 bg-transparent">
        <h6 class="text-capitalize mb-0">Jumlah Penduduk Berdasarkan RT</h6>
      </div>
      <div class="card-body p-3">
        <div class="chart">
          <canvas id="bar-chart" class="chart-canvas" height="300"></canvas>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
          <div class="modal-body p-0">
            <div class="card card-plain">
              <div class="card-header pb-0 text-left">
                <h3 class="font-weight-bolder text-info text-gradient">Tambah Data Chart</h3>
              </div>
              <div class="card-body">
                <form role="form text-left" action="{{route('officer.chart_add')}}" method="POST">
                  @csrf
                  <label>Jumlah Warga</label>
                  <div class="input-group mb-3">
                    <input type="text" name="jumlahWarga" id="jumlahWarga" class="form-control" placeholder="Jumlah Warga" >
                  </div>
                  <label>Jumlah Kepala Keluarga</label>
                  <div class="input-group mb-3">
                    <input type="text" name="jumlahKepalaKeluarga" id="jumlahKepalaKeluarga" class="form-control" placeholder="Jumlah Kepala Keluarga" >
                  </div>
                  <label>RT</label>
                  <div class="input-group mb-3">
                    <input type="text" name="rt" id="rt" class="form-control" placeholder="RT" >
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">Tambah</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 mb-lg-0 mb-4">
    <div class="card  h-100">
      <div class="card-header pb-0 pt-3 bg-transparent">
        <h6 class="text-capitalize mb-0">Jumlah Pendudukan Berdasarkan Tingkat Pendidikan</h6>
      </div>
      <div class="card-body p-3">
        <div class="chart">
          <canvas id="pie-chart" class="chart-canvas" height="300"></canvas>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 mb-lg-0 mb-4">
    <div class="card  h-100">
      <div class="card-header pb-0 pt-3 bg-transparent">
        <h6 class="text-capitalize mb-0">Jumlah Pendudukan Berdasarkan Mata Pencaharian</h6>
      </div>
      <div class="card-body p-3">
        <div class="chart">
          <canvas id="pie-chart2" class="chart-canvas" height="300"></canvas>
        </div>
      </div>
    </div>
  </div>
</div> --}}
@endsection

@push('style_ol')
<style>
  ol.gradient-list > li::before, ol.gradient-list > li {
    box-shadow: 0.25rem 0.25rem 0.6rem rgba(0, 0, 0, 0.05), 0 0.5rem 1.125rem rgba(75, 0, 0, 0.05);
  }

  ol.gradient-list {
    counter-reset: gradient-counter;
    list-style: none;
    margin: 1.75rem 0;
    padding-left: 1rem;
  }
  ol.gradient-list > li {
    background: white;
    border-radius: 0 0.5rem 0.5rem 0.5rem;
    counter-increment: gradient-counter;
    margin-top: 1rem;
    min-height: 3rem;
    padding: 1rem 1rem 1rem 3rem;
    position: relative;
  }
  ol.gradient-list > li::before, ol.gradient-list > li::after {
    background: linear-gradient(135deg, #83e4e2 0%, #a2ed56 100%);
    border-radius: 1rem 1rem 0 1rem;
    content: "";
    height: 2.5rem;
    left: -1rem;
    overflow: hidden;
    position: absolute;
    top: -1rem;
    width: 2.5rem;
  }
  ol.gradient-list > li::before {
    align-items: flex-end;
    content: counter(gradient-counter);
    color: #1d1f20;
    display: flex;
    font: 900 1.5em/1 "Montserrat";
    justify-content: flex-end;
    padding: 0.125em 0.25em;
    z-index: 1;
  }
  ol.gradient-list > li:nth-child(10n+1):before {
    background: linear-gradient(135deg, rgba(162, 237, 86, 0.2) 0%, rgba(253, 220, 50, 0.2) 100%);
  }
  ol.gradient-list > li:nth-child(10n+2):before {
    background: linear-gradient(135deg, rgba(162, 237, 86, 0.4) 0%, rgba(253, 220, 50, 0.4) 100%);
  }
  ol.gradient-list > li:nth-child(10n+3):before {
    background: linear-gradient(135deg, rgba(162, 237, 86, 0.6) 0%, rgba(253, 220, 50, 0.6) 100%);
  }
  ol.gradient-list > li:nth-child(10n+4):before {
    background: linear-gradient(135deg, rgba(162, 237, 86, 0.8) 0%, rgba(253, 220, 50, 0.8) 100%);
  }
  ol.gradient-list > li:nth-child(10n+5):before {
    background: linear-gradient(135deg, #a2ed56 0%, #fddc32 100%);
  }
  ol.gradient-list > li:nth-child(10n+6):before {
    background: linear-gradient(135deg, rgba(162, 237, 86, 0.8) 0%, rgba(253, 220, 50, 0.8) 100%);
  }
  ol.gradient-list > li:nth-child(10n+7):before {
    background: linear-gradient(135deg, rgba(162, 237, 86, 0.6) 0%, rgba(253, 220, 50, 0.6) 100%);
  }
  ol.gradient-list > li:nth-child(10n+8):before {
    background: linear-gradient(135deg, rgba(162, 237, 86, 0.4) 0%, rgba(253, 220, 50, 0.4) 100%);
  }
  ol.gradient-list > li:nth-child(10n+9):before {
    background: linear-gradient(135deg, rgba(162, 237, 86, 0.2) 0%, rgba(253, 220, 50, 0.2) 100%);
  }
  ol.gradient-list > li:nth-child(10n+10):before {
    background: linear-gradient(135deg, rgba(162, 237, 86, 0) 0%, rgba(253, 220, 50, 0) 100%);
  }
  ol.gradient-list > li + li {
    margin-top: 2rem;
  }
</style>
@endpush

@push('chart')
{{-- Chart Bar Data Warga Berdasarkan Umur --}}
<script>
  var ctx = document.getElementById("bar-chart").getContext("2d");
  new Chart(ctx, {
    type: "bar",
    data: {
      labels: ['0-5 Tahun','6-7 Tahun','7-13 Tahun','13-16 Tahun','16-19 Tahun','19-23 Tahun','23-30 Tahun','30-40 Tahun','40-56 Tahun','56-65 Tahun','65-75 Tahun','>75 Tahun'],
      datasets: [
        {
          label: "Laki-Laki",
          weight: 5,
          borderWidth: 0,
          borderRadius: 4,
          backgroundColor: 'rgba(54, 162, 235)',
          data: [52,57,172,68,76,107,153,211,285,73,35,9],
          fill: false,
          maxBarThickness: 35
        }, {
          label: "Perempuan",
          weight: 5,
          borderWidth: 0,
          borderRadius: 4,
          backgroundColor: 'rgba(255, 99, 132)',
          data: [57,37,154,54,79,95,145,210,266,47,19,10],
          fill: false,
          maxBarThickness: 35
        },
      ]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: true
        }
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5]
          },
          ticks: {
            display: true,
            padding: 10,
            color: "#9ca2b7"
          }
        },
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: true,
            drawTicks: true
          },
          ticks: {
            display: true,
            color: "#9ca2b7",
            padding: 10
          }
        }
      }
    }
  });
</script>
{{-- Chart Pie Data Warga Berdasarkan Suku Bangsa --}}
<script>
  const ctx2 = document.getElementById('pie-chart').getContext("2d");
  new Chart(ctx2, {
    type: 'pie',
    data: {
      labels: ['Banjar','Berau','Bugis','Dayak','Jawa','Lombok','Timur','Toraja'],
      datasets: [{
        data: [41,58,1880,91,243,13,20,125],
        backgroundColor: [
          '#006ba6',
          '#0281d3',
          '#0496ff',
          '#d81159',
          '#f69248',
          '#82a9a1',
          '#ffbc42',
          '#ec674e',
        ],
        hoverOffset: 4
        },
      ]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: true
        }
      },
    }
  });
</script>
{{-- Chart Pie Data Warga Berdasarkan Agama --}}
<script>
  const ctx3 = document.getElementById('pie-chart2').getContext("2d");
  new Chart(ctx3, {
    type: 'pie',
    data: {
      labels: ['Islam','Katolik','Kristen','Budha','Hindu','Lainnya',],
      datasets: [{
        data: [2.261,90,114,0,6,0],
        backgroundColor: [
          '#006ba6',
          '#0281d3',
          '#0496ff',
          '#d81159',
          '#f69248',
          '#82a9a1',
        ],
        hoverOffset: 4
        },
      ]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: true
        }
      },
    }
  });
</script>
{{-- Chart Bar Data Warga Berdasarkan Pendidikan --}}
<script>
  var ctx4 = document.getElementById("bar-chart2").getContext("2d");
  new Chart(ctx4, {
    type: "bar",
    data: {
      labels: ['BTK','STK','TPS','PSD','TSD','TTSD','PSMP','TSMP','PSMU','TSMU','TD1','TD2','MD3','TD3','TD4','MS1','TS1','TS2','TSLB'],
      datasets: [
        {
          label: "Laki-Laki",
          weight: 5,
          borderWidth: 0,
          borderRadius: 4,
          backgroundColor: 'rgba(54, 162, 235)',
          data: [106,65,20,153,234,110,80,141,91,217,3,3,0,10,3,45,16,1,0],
          fill: false,
          maxBarThickness: 35
        }, {
          label: "Perempuan",
          weight: 5,
          borderWidth: 0,
          borderRadius: 4,
          backgroundColor: 'rgba(255, 99, 132)',
          data: [91,54,14,151,288,104,68,117,75,131,2,4,2,9,6,37,19,0,1],
          fill: false,
          maxBarThickness: 35
        },
      ]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: true
        }
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5]
          },
          ticks: {
            display: true,
            padding: 10,
            color: "#9ca2b7"
          }
        },
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: true,
            drawTicks: true
          },
          ticks: {
            display: true,
            color: "#9ca2b7",
            padding: 10
          }
        }
      }
    }
  });
</script>
{{-- Chart Bar Data Warga Berdasarkan Pendidikan --}}
<script>
  var ctx5 = document.getElementById("bar-chart3").getContext("2d");
  new Chart(ctx5, {
    type: "bar",
    data: {
      labels: ['SKTS','PSD','USDTS','PSMP','USMPTS','PSMU','USMUTS','M','PKeb','Nel','TKay','B','P','AKamp','IRT','KSwa','PGu','Pdt','Dai','Hon','PL','TBK'],
      datasets: [
        {
          label: "Laki-Laki",
          weight: 5,
          borderWidth: 0,
          borderRadius: 4,
          backgroundColor: 'rgba(54, 162, 235)',
          data: [28,11,6,3,1,4,2,4,300,0,0,15,0,3,0,27,3,0,1,9,37,0],
          fill: false,
          maxBarThickness: 35
        }, {
          label: "Perempuan",
          weight: 5,
          borderWidth: 0,
          borderRadius: 4,
          backgroundColor: 'rgba(255, 99, 132)',
          data: [34,18,9,5,1,8,0,1,50,0,0,5,0,3,180,16,0,0,0,8,30],
          fill: false,
          maxBarThickness: 35
        },
      ]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: true
        }
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5]
          },
          ticks: {
            display: true,
            padding: 10,
            color: "#9ca2b7"
          }
        },
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: true,
            drawTicks: true
          },
          ticks: {
            display: true,
            color: "#9ca2b7",
            padding: 10
          }
        }
      }
    }
  });
</script>
@endpush
