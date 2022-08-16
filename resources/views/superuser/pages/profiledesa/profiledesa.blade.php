@extends('superuser.layouts.app')

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
              Biatan Bapinang merupakansalah satu dari empat perkampungan suku Dayak asli yang ada di wilayah Kecamatan Biatan, sehingga dapat dikatakan bahwa Kampung Biatan Bapinang ini adalah Perkampungan yang dibangun dari perkembangan peradaban adat suku yang sudah lama dan turun temurun menempati kampung tersebut.
              <br>
              Menurut cerita kampung ini dibangun oleh kesatuan Suku Dayak Basap, hal ini terlihat sampai sekarang yakni sebagian besar komunitas yang mendiami kampung tersebut adalalah dari suku Dayak Basap.
              <br>
              Sebagaimana sejarah perkampungan suku dayak di pedalaman kalimantan, Perkampungan tidak tahu pasti kapan berdirinya, oleh siapa dan dari mana asal-usul kampung ini secara pasti memang belum ada penelitian oleh para ahli. Namun berdasarkan Cerita dari sesepuh kampung, dapat kami gambarkan bahwa Kampung Biatan Bapinang, pada mulanya bernama “Nuntulung”, nama itu diambil dari pohon semak-semak sejenis “Keladi” yang pada saat itu banyak tumbuh disekitar perkampungan tersebut, oleh masyarakat setempat rumpun pohon jenis keladi itu dinamakan “BINTULUNG”
              <br>
              Sekelompok masyarakat yang tinggal di kampung itu bukan berasal dari situ namun konon berasal dari Perbukitan batu/Gua  batu  yang  hidupnya masih nomaden/berpindah-pindah dari tempat satu ke tempat lainnya tergantung dimana mereka mendapatkan Rizki dan tidak mendapat gangguan dari pihak-pihak lain, sebagian yang tidak berpindah lagi, menetap di kampung itu.
              <br>
              Seiring dengan penataan wilayah Indonesia Pasca Indonesia merdeka, termasuk dalam hal ini Pulau Kalimantan, untuk itu guna perbaikan administrasi, oleh Pejabat Kecamatan Talisayan Nama kampung itu diubah menjadi Kampung Biatan Bapinang, barang kali karena masih satu jalur dengan sungai Biatan.
              <br>
              Dalam perkembanganya, Suku Dayak yang tinggal di kampung ini cukup terbuka, sehingga mereka juga menerima pendatang dari luar, maka sampai saat ini bukan hanya suku dayak basap saja yang tinggal di sana, namun juga dari suku suku lain, yang hidup berdampingan, saling menghargai dan menghormati antar keyakinan yang berlainan. Sekarang ini penduduk kampung Biatan Bapinang sudah bisa di katakan heterogen karena ada suku-suku lain yang tinggal di kampug itu, diantaranya suku dayak bugis, jawa, sunda, ntb, flores, bali, batak dll. dengan aneka ragam adat dan budayanya juga.
              <br>
              Dalam bidang keagamaan, Masyarakat Kampung Biatan Bapinang pada awalnya adalah penganut agama suku/animisme, hal ini nampak dari tata cara kebiasaan orang-orang tua yang masih nampak sekarang ini seperti adat Bakudung/ Erau, Istilah “Kampunan” dan lain-lain yang masih melekat sampai sekarang, baru pada dekade tujuh puluhan (sektar tahun 1976) missionaris agama Kristen (Kingmi) masuk ke Kampung Biatan Bapinang, oleh karenanya sebagian besar masyarakat di sana menganut agama Kristen.
              <br>
              Dengan masuknya suku Bugis ke Kampung Biatan Bapinang, berpengaruh juga terhadap adat-istiadat dan agama, maka untuk saat ini selain Agama Kristen agama Islam juga berkembang pesat. Perbedaan suku dan agama bukan menjadi penghalang masyarakat untuk bersatu, mereka hidup berdampingan satu sama lainnya, saling membantu dan saling menghormati.

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
          Menurut sumber yang telah dihimpun dari tokoh masyarakat yang paling awal menempati Lokasi Kampung Biatan Bapinang, sepanjang sejarahnya telah dipimpin oleh:
        </p>
      </div>
    </div>
    <ol class="gradient-list">
      <li>	Kepala Kampung  I	: Siwai ( 1983 s/d 1988 )</li>
      <li>	Kepala Kampung II	: Jhon. L (1989 s/d 1994)</li>
      <li>	Kepala Kampung III	: David (1995 s/d) 2000)</li>
      <li>	Kepala Kampung IV	: Riansyah	(2001 s/d 2005)</li>
      <li>	Kepala Kampung V	: Thomas. M	(2006 s/d 2009)</li>
      <li>	Kepala Kampung(Pj)	:  Tri Suyanto, S.IP	(2010)</li>
      <li>	Kepala Kampung VII	:  Ramli	( 2011 s/d2017 )</li>
      <li>	Kepala Kampung VIII (Pj)	:  Tri Suyanto, S.IP	(2017)</li>
      <li>	Kepala Kampung  IX	: Heberly	(2018 s/d sekarang)</li>
    </ol>
    <div class="card px-0 mb-4">
      <div class="card-body pb-0 pt-3 bg-transparent">
        <i class="fa text-warning fa-money" aria-hidden="true"></i>
        <h5 class="text-capitalize">Kondisi Ekonomi</h5>
        <p>
          Kondisi ekonomi masyarakat Kampung Biatan Bapinangsecara kasat mata terlihat jelas perbedaannya antara Rumah Tangga yang berkategori miskin, sangat miskin, sedang dan kaya. Hal ini disebabkan karena mata pencahariannya di sektor- sektor usaha yang berbeda-beda pula, sebagian besar di sektor non formal seperti buruh Harian Lepas Buruh bangunan, buruh tani, petani Ladang, perkebunan karet dan sawit dan sebagian kecil di sektor formal seperti PNS pemda, Honorer, guru, tenaga medis, dll.
        </p>
      </div>
    </div>
    <div class="card px-0">
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
          <button class="btn btn-warning mt-3">Lihat Gambar</button>
        </ul>
      </div>
    </div>
  </div>
</div>

{{-- Struktur Organisasi --}}
<div class="card mt-4">
  <div class="card-body pt-3 bg-transparent">
    <i class="fa text-warning fa-sitemap" aria-hidden="true"></i>
    <h5>Struktur Organisasi Pemerintahan Kampung Biatan Bapinang</h5>
    <div class="row mt-4">
      <div class="col-lg-6 mb-lg-0 mb-4">
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
                    <td class="align-middle text-sm">: Heberly</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Sekretaris Kampung</td>
                    <td class="align-middle text-sm">: Rifka Philipus</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Kaur Pemerintahan</td>
                    <td class="align-middle text-sm">: Septi Eunike. R</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Kaur Umum</td>
                    <td class="align-middle text-sm">: Chandra Hariyadi</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Kaur Pembangunan</td>
                    <td class="align-middle text-sm">: Marten</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mb-lg-0 mb-4">
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
                    <td class="align-middle text-sm">Cupin Yusak</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Wakil Ketua</td>
                    <td class="align-middle text-sm">:</td>
                    <td class="align-middle text-sm">Sukarman</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Sekretsris</td>
                    <td class="align-middle text-sm">:</td>
                    <td class="align-middle text-sm">Sabar</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Anggota</td>
                    <td class="align-middle text-sm">:</td>
                    <td class="align-middle text-sm">
                      Evi Septi Miri Dewi
                      <br>
                      Marlinda Klaberi
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
                    <td class="align-middle text-sm">: Heberly</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Wakil Ketua</td>
                    <td class="align-middle text-sm">: Amos Pangeran</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Sekretaris</td>
                    <td class="align-middle text-sm">: Yudha Timor</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Bendahara</td>
                    <td class="align-middle text-sm">: Karim Mika</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Seksi Agama</td>
                    <td class="align-middle text-sm">: Sultan</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Seksi Keamanan, Ketentraman & Ketertiban</td>
                    <td class="align-middle text-sm">: Juhari</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Seksi Pendidikan</td>
                    <td class="align-middle text-sm">: Sulkarnain</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Seksi Lingkungan Hidup</td>
                    <td class="align-middle text-sm">: Julius</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Seksi Kesehatan</td>
                    <td class="align-middle text-sm">: Nuradawiyah</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Seksi Pemuda, Olahraga dan Kesenian</td>
                    <td class="align-middle text-sm">: Nasir</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Seksi Pembangunan dan Ekonomi</td>
                    <td class="align-middle text-sm">: Sarwo</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Seksi Kesejahteraan Sosial</td>
                    <td class="align-middle text-sm">: Jamma</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Seksi Pemberdayaan Wanita</td>
                    <td class="align-middle text-sm">: Yuyun Yunarti</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="card mb-4 shadow-none">
          <div class="card-header text-uppercase pb-2 pt-2 ps-3 font-weight-bold bg-success text-white">
          Pengurus Posyandu
          </div>
          <div class="card-body pb-0 pt-2 ps-3">
            <div class="table-responsive">
              <table class="table-borderless align-items-center mb-2">
                <tbody>
                  <tr>
                    <td class="align-middle text-sm">Ketua</td>
                    <td class="align-middle text-sm">:</td>
                    <td class="align-middle text-sm">Ny.Nursibah</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Sekretaris</td>
                    <td class="align-middle text-sm">:</td>
                    <td class="align-middle text-sm">Ny.Malah</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Bendahara</td>
                    <td class="align-middle text-sm">:</td>
                    <td class="align-middle text-sm">Ny.Erni</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Anggota</td>
                    <td class="align-middle text-sm">:</td>
                    <td class="align-middle text-sm">
                      Ny.Suryani
                      <br>
                      Ny.Senna Hati
                      <br>
                      Ny.Santi
                      <br>
                      Ny.Aisyah
                      <br>
                      Ny.Munjayana
                      <br>
                      Ny.Rika Jasmani
                      <br>
                      Ny.Basso Ibrahim
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
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
                    <td class="align-middle text-sm">Yudha Timor</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Wakil Ketua</td>
                    <td class="align-middle text-sm">:</td>
                    <td class="align-middle text-sm">Yohanis</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Sekretaris I</td>
                    <td class="align-middle text-sm">:</td>
                    <td class="align-middle text-sm">Jayadi Arianto</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Sekretaris II</td>
                    <td class="align-middle text-sm">:</td>
                    <td class="align-middle text-sm">Dewi</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Bendahara I</td>
                    <td class="align-middle text-sm">:</td>
                    <td class="align-middle text-sm">Jamil</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Bendahara II</td>
                    <td class="align-middle text-sm">:</td>
                    <td class="align-middle text-sm">Mardiana</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Anggota</td>
                    <td class="align-middle text-sm">:</td>
                    <td class="align-middle text-sm">
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="card shadow-none">
          <div class="card-header text-uppercase pb-2 pt-2 ps-3 font-weight-bold bg-success text-white">
          Kelompok Sadar Wisata
          </div>
          <div class="card-body pb-0 pt-2 ps-3">
            <div class="table-responsive">
              <table class="table-borderless align-items-center mb-2">
                <tbody>
                  <tr>
                    <td class="align-middle text-sm">Ketua</td>
                    <td class="align-middle text-sm">:</td>
                    <td class="align-middle text-sm">Wandra Hardianti</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Wakil Ketua</td>
                    <td class="align-middle text-sm">:</td>
                    <td class="align-middle text-sm">Ikhsan Yunus</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Sekretaris I</td>
                    <td class="align-middle text-sm">:</td>
                    <td class="align-middle text-sm">Yuliana Marsyiah</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Sekretaris II</td>
                    <td class="align-middle text-sm">:</td>
                    <td class="align-middle text-sm">Basso Ibrahim</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Bendahara I</td>
                    <td class="align-middle text-sm">:</td>
                    <td class="align-middle text-sm">Supriyono</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Seksi-seksi</td>
                  </tr>
                  <tr class="">
                    <td class="align-middle text-sm ps-1">• Seksi Atraksi Wisata dan Budaya</td>
                    <td class="align-middle text-sm">:</td>
                    <td class="align-middle text-sm">Jamil</td>
                  </tr>
                  <tr class="">
                    <td class="align-middle text-sm ps-1">• Seksi Kebersihan dan Keindahan</td>
                    <td class="align-middle text-sm">:</td>
                    <td class="align-middle text-sm">Mashudi</td>
                  </tr>
                  <tr class="">
                    <td class="align-middle text-sm ps-1">• Seksi Pendidikan dan Usaha</td>
                    <td class="align-middle text-sm">:</td>
                    <td class="align-middle text-sm">Marten Yohanis</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mb-lg-0">
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
                </tbody>
              </table>
            </div>
          </div>
        </div>
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
                    <td class="align-middle text-sm">Ny. Nurhayaty Heberly</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Wakil Ketua</td>
                    <td class="align-middle text-sm">:</td>
                    <td class="align-middle text-sm">Ny.Evi Septi Miri Dewi Yudhda</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Sekretaris</td>
                    <td class="align-middle text-sm">:</td>
                    <td class="align-middle text-sm">Ny.Rifka</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Sekretaris II</td>
                    <td class="align-middle text-sm">:</td>
                    <td class="align-middle text-sm">Ny.Jenny</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Bendahara</td>
                    <td class="align-middle text-sm">:</td>
                    <td class="align-middle text-sm">Ny.Ida Laila Royana Chandra</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Pokja I</td>
                  </tr>
                  <tr class="">
                    <td class="align-middle text-sm ps-1">• Ketua</td>
                    <td class="align-middle text-sm">:</td>
                    <td class="align-middle text-sm">Ny.Hj.Sanawia</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm ps-1">• Sekretaris</td>
                    <td class="align-middle text-sm">:</td>
                    <td class="align-middle text-sm">Ny.Septi Eunika R Bernov</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm ps-1">• Anggota</td>
                    <td class="align-middle text-sm">:</td>
                    <td class="align-middle text-sm">
                      Ny.Maslina Amos Pangeran
                      <br>
                      Ny.Samsi
                      <br>
                      Ny.Milati
                      <br>
                      Ny.Noftiani
                      <br>
                      Ny.Mirna
                      <br>
                      Ny.Hayati
                    </td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Pokja II</td>
                  </tr>
                  <tr class="">
                    <td class="align-middle text-sm ps-1">• Ketua</td>
                    <td class="align-middle text-sm">:</td>
                    <td class="align-middle text-sm">Ny.Asimah</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm ps-1">• Sekretaris</td>
                    <td class="align-middle text-sm">:</td>
                    <td class="align-middle text-sm">Ny.Kasmawati</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm ps-1">• Anggota</td>
                    <td class="align-middle text-sm">:</td>
                    <td class="align-middle text-sm">
                      Ny.Sumi
                      <br>
                      Ny.Mariana
                      <br>
                      Ny.Besse Nuraini
                      <br>
                      Ny.Yunarti
                      <br>
                      Ny.Darlia
                      <br>
                      Ny.Jumaida
                      <br>
                      Ny.Sandra
                    </td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Pokja III</td>
                  </tr>
                  <tr class="">
                    <td class="align-middle text-sm ps-1">• Ketua</td>
                    <td class="align-middle text-sm">:</td>
                    <td class="align-middle text-sm">Ny.Lusia Wiwin</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm ps-1">• Sekretaris</td>
                    <td class="align-middle text-sm">:</td>
                    <td class="align-middle text-sm">Ny.Marsiah</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm ps-1">• Anggota</td>
                    <td class="align-middle text-sm">:</td>
                    <td class="align-middle text-sm">
                      Ny.Rika Jasmani
                      <br>
                      Ny.Hajriwati
                      <br>
                      Ny.Endang
                      <br>
                      Ny.Munjayana
                      <br>
                      Ny.Mardiana
                      <br>
                      Ny.Nasra
                      <br>
                      Ny.Seri Wati
                      <br>
                      Ny.Wagiah
                    </td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm">Pokja IV</td>
                  </tr>
                  <tr class="">
                    <td class="align-middle text-sm ps-1">• Ketua</td>
                    <td class="align-middle text-sm">:</td>
                    <td class="align-middle text-sm">Ny.Erni</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm ps-1">• Sekretaris</td>
                    <td class="align-middle text-sm">:</td>
                    <td class="align-middle text-sm">Ny.Nursibah</td>
                  </tr>
                  <tr>
                    <td class="align-middle text-sm ps-1">• Anggota</td>
                    <td class="align-middle text-sm">:</td>
                    <td class="align-middle text-sm">
                      Ny.Dewi
                      <br>
                      Ny.Mala
                      <br>
                      Ny.Ratna Ramli
                      <br>
                      Ny.Aisyah
                      <br>
                      Ny.Senna Hati
                      <br>
                      Ny.Suryani
                    </td>
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
        <h5 class="text-capitalize">Letak Geografis</h5>
        <p>Kampung   Biatan   Bapinang   merupakansatu diantara  delapan Kampung di Kecamatan Biatan Kabupaten Berau Propinsi Kalimantan Timur. </p>
        <div class="row">
          <div class="col-lg-5 mb-lg-0 mb-4">
            <ol class="ps-3">
              <li class="font-weight-bold">Batas-batas wilayah sebagai berikut:</li>
              <table class="table-borderless">
                <tbody>
                  <tr>
                    <td>• Sebelah Utara</td>
                    <td>:</td>
                    <td class="ps-1">Tabalar Muara</td>
                  </tr>
                  <tr>
                    <td>• Sebelah Timur</td>
                    <td>:</td>
                    <td class="ps-1">Kampung Biatan Lempake <br> Biatan Biru</td>
                  </tr>
                  <tr>
                    <td>• Sebelah Barat</td>
                    <td>:</td>
                    <td class="ps-1">Kampung Tabalar Ulu</td>
                  </tr>
                  <tr>
                    <td>• Sebelah Selatan</td>
                    <td>:</td>
                    <td class="ps-1">Kutai Timur</td>
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
                    <td>• Jarak Kampung ke ibu kota Kecamatan</td>
                    <td>:</td>
                    <td class="ps-1">8 Km</td>
                  </tr>
                  <tr>
                    <td>• Lama tempuh ke ibu kota kecamatan</td>
                    <td>:</td>
                    <td class="ps-1">15 menit</td>
                  </tr>
                  <tr>
                    <td>• Kendaraan umum ke ibu kota kecamatan</td>
                    <td>:</td>
                    <td class="ps-1">Kendaraan Darat</td>
                  </tr>
                  <tr>
                    <td>• Jarak ke ibu Kota Kecamatan</td>
                    <td>:</td>
                    <td class="ps-1">125 Km</td>
                  </tr>
                  <tr>
                    <td>• Lama tempuh ke ibu Kota Kabupaten</td>
                    <td>:</td>
                    <td class="ps-1">240 menit</td>
                  </tr>
                  <tr>
                    <td>• Kendaraan umum ke ibu kota Kabupaten</td>
                    <td>:</td>
                    <td class="ps-1">Kendaraan Darat</td>
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
        <p>Jaringan jalan yang ada di Kampung Biatan Bapinang yaitu jalan pemukiman RT.01 dan 02 yang merupakan jalan poros Tanjung Redeb-Talisayan. Jalan pemukiman yang lebar dan dapat dilalui oleh mobil. Sedangkan jalan emukiman RT.03 merupakan jalan menuju wisata Air Panas. Pembangunan jalan Biata Bapinang fokus pada peningkatan jalan usaha tani, serta oenimbunan dengan pasir dan batu (sirtu)</p>
        <table class="table-borderless">
          <tbody>
            <tr>
              <td class="ps-1">• Panjang jalan poros</td>
              <td>:</td>
              <td class="ps-1">5 km</td>
            </tr>
            <tr>
              <td class="ps-1">• Panjang jalan kampung</td>
              <td>:</td>
              <td class="ps-1">4 km</td>
            </tr>
            <tr>
              <td class="ps-1">• Panjang jalan kampung yang baik</td>
              <td>:</td>
              <td class="ps-1">2 km</td>
            </tr>
            <tr>
              <td class="ps-1">• Panjang jalan kampung yang rusak</td>
              <td>:</td>
              <td class="ps-1">2 km</td>
            </tr>
            <tr>
              <td class="ps-1">• Panjang jalan poros yang rusak</td>
              <td>:</td>
              <td class="ps-1">2 km</td>
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
              <td class="ps-1">1 Unit 3 ruangan </td>
            </tr>
            <tr>
              <td class="ps-2">• Gedung SMP</td>
              <td>:</td>
              <td class="ps-1">1 Unit 14 ruangan </td>
            </tr>
            <tr>
              <td class="ps-2">• Gedung SMA</td>
              <td>:</td>
              <td class="ps-1">-</td>
            </tr>
            <tr>
              <td class="ps-2">• Gedung PAUD</td>
              <td>:</td>
              <td class="ps-1">1 Unit 3 ruangan </td>
            </tr>
            <tr>
              <td class="ps-2">• Gedung TK</td>
              <td>:</td>
              <td class="ps-1">-</td>
            </tr>
            <tr>
              <td class="ps-2">• Gedung TPA</td>
              <td>:</td>
              <td class="ps-1">1 Unit</td>
            </tr>
            <tr>
              <td class="ps-2">• Guru SD</td>
              <td>:</td>
              <td class="ps-1">12 Orang</td>
            </tr>
            <tr>
              <td class="ps-2">• Guru SMP</td>
              <td>:</td>
              <td class="ps-1">13 Orang</td>
            </tr>
            <tr>
              <td class="ps-2">• Guru SMA</td>
              <td>:</td>
              <td class="ps-1">-</td>
            </tr>
            <tr>
              <td class="ps-2">• Guru PAUD</td>
              <td>:</td>
              <td class="ps-1">5 Orang</td>
            </tr>
            <tr>
              <td class="ps-2">• Guru TK</td>
              <td>:</td>
              <td class="ps-1">-</td>
            </tr>
            <tr>
              <td class="ps-2">• Guru TPA</td>
              <td>:</td>
              <td class="ps-1">5 Orang</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-lg-6 mb-lg-0">
        <h6><i class="fa text-success fa-hospital-o me-2" aria-hidden="true"></i>Kesehatan</h6>
        <table class="table-borderless">
          <tbody>
            <tr>
              <td class="ps-2">• Gedung Puskesmas Pembantu</td>
              <td>:</td>
              <td class="ps-1">1 Unit</td>
            </tr>
            <tr>
              <td class="ps-2">• Gedung Polindes</td>
              <td>:</td>
              <td class="ps-1">1 Unit</td>
            </tr>
            <tr>
              <td class="ps-2">• Gedung Posyandu</td>
              <td>:</td>
              <td class="ps-1">1 Unit</td>
            </tr>
            <tr>
              <td class="ps-2">• Mantri Kesehatan</td>
              <td>:</td>
              <td class="ps-1">1 Orang</td>
            </tr>
            <tr>
              <td class="ps-2">• Bidan Kesehatan</td>
              <td>:</td>
              <td class="ps-1">1 Orang</td>
            </tr>
            <tr>
              <td class="ps-2">• Dukun Kesehatan</td>
              <td>:</td>
              <td class="ps-1">-</td>
            </tr>
            <tr>
              <td class="ps-2">• Kader Posyandu</td>
              <td>:</td>
              <td class="ps-1">10 Orang</td>
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
              <td class="ps-2">• Rumah Penduduk</td>
              <td>:</td>
              <td class="ps-1"> </td>
            </tr>
            <tr>
              <td class="ps-2">• Masjid</td>
              <td>:</td>
              <td class="ps-1">1 Buah</td>
            </tr>
            <tr>
              <td class="ps-2">• Mushola</td>
              <td>:</td>
              <td class="ps-1">-</td>
            </tr>
            <tr>
              <td class="ps-2">• Gereja Katolik</td>
              <td>:</td>
              <td class="ps-1">-</td>
            </tr>
            <tr>
              <td class="ps-2">• Gereja Protestan</td>
              <td>:</td>
              <td class="ps-1">1 Unit</td>
            </tr>
            <tr>
              <td class="ps-2">• Kantor Kampung</td>
              <td>:</td>
              <td class="ps-1">1 Unit</td>
            </tr>
            <tr>
              <td class="ps-2">• Balai Kampung</td>
              <td>:</td>
              <td class="ps-1">1 Unit</td>
            </tr>
            <tr>
              <td class="ps-2">• Balai Adat</td>
              <td>:</td>
              <td class="ps-1"> </td>
            </tr>
            <tr>
              <td class="ps-2">• Penggilingan Padi</td>
              <td>:</td>
              <td class="ps-1">1 Unit</td>
            </tr>
            <tr>
              <td class="ps-2">• Lapangan Voli</td>
              <td>:</td>
              <td class="ps-1">1 Unit</td>
            </tr>
            <tr>
              <td class="ps-2">• Lapangan Bulu Tangkis</td>
              <td>:</td>
              <td class="ps-1">1 Unit</td>
            </tr>
            <tr>
              <td class="ps-2">• Lapangan Sepak Bola</td>
              <td>:</td>
              <td class="ps-1">-</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-lg-6 mb-lg-0 mb-4">
        <h6><i class="fa text-success fa-leaf me-2" aria-hidden="true"></i>Pertanian/Perternakan</h6>
        <table class="table-borderless">
          <tbody>
            <tr>
              <td class="ps-2">• Luas Tanah Padi GOGO Potensi</td>
              <td>:</td>
              <td class="ps-1">500 Ha</td>
            </tr>
            <tr>
              <td class="ps-2">• Luas Tanah Garapan Tahun Ini</td>
              <td>:</td>
              <td class="ps-1">150 Ha</td>
            </tr>
            <tr>
              <td class="ps-2">• Luas Tanah Pertanian Ladang</td>
              <td>:</td>
              <td class="ps-1">150 Ha</td>
            </tr>
            <tr>
              <td class="ps-2">• Lahan Perkebunan Kelapa Sawit</td>
              <td>:</td>
              <td class="ps-1">400 Ha</td>
            </tr>
            <tr>
              <td class="ps-2">• Luas Kebun Lada/Merica</td>
              <td>:</td>
              <td class="ps-1">150 Ha</td>
            </tr>
            <tr>
              <td class="ps-2">• Luas Kebun Kopi</td>
              <td>:</td>
              <td class="ps-1">1 Ha</td>
            </tr>
            <tr>
              <td class="ps-2">• Luas Kebun Kakau</td>
              <td>:</td>
              <td class="ps-1">3 Ha</td>
            </tr>
            <tr>
              <td class="ps-2">• Jumlah Ayam</td>
              <td>:</td>
              <td class="ps-1">1150 Ekor</td>
            </tr>
            <tr>
              <td class="ps-2">• Jumlah Bebek</td>
              <td>:</td>
              <td class="ps-1">50 Ekor</td>
            </tr>
            <tr>
              <td class="ps-2">• Jumlah Kambing</td>
              <td>:</td>
              <td class="ps-1">10 Ekor</td>
            </tr>
            <tr>
              <td class="ps-2">• Jumlah Sapi</td>
              <td>:</td>
              <td class="ps-1">20 Ekor/td>
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
  <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
    <div class="card">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Warga</p>
              <h5 class="font-weight-bolder">
               716 Jiwa
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
               209 KK
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
               381 Jiwa
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
               335 Jiwa
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
              <li class="text-xs">PSD(Pelajar Sekolah SD)</li>
              <li class="text-xs">TSD(Tamat SD)</li>
              <li class="text-xs">TTSD(Tidak Tamat SD)</li>
              <li class="text-xs">PSMP(Pelajar SMP)</li>
              <li class="text-xs">TSMP(Tamat SMP)</li>
            </ul>
          </div>
          <div class="col-lg-4 mb-lg-0 mb-4">
            <ul class="mb-0">
              <li class="text-xs">TTSMP(Tidak Tamat SMP)</li>
              <li class="text-xs">PSMU(Pelajar SMU)</li>
              <li class="text-xs">TSMU(Tamat SMU)</li>
              <li class="text-xs">TTSMU(Tidak Tamat SMU)</li>
              <li class="text-xs">M(Mahasiswa)</li>
            </ul>
          </div>
          <div class="col-lg-4 mb-lg-0 mb-4">
            <ul class="mb-0">
              <li class="text-xs">D(Diploma)</li>
              <li class="text-xs">S(Sarjana)</li>
              <li class="text-xs">Mg/Dr(Magister/Doktor)</li>
              <li class="text-xs">TTK(Tidak Tamat Kuliah)</li>
              <li class="text-xs">TPS(Tidak Pernah Sekolah)</li>
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
      <div class="card-body p-3">
        <div class="chart">
          <canvas id="bar-chart3" class="chart-canvas" height="300"></canvas>
        </div>
        <p class="text-xs ps-1 mb-0 font-weight-bold">Keterangan</p>
        <div class="row">
          <div class="col-lg-4 mb-lg-0 mb-4">
            <ul class="mb-0">
              <li class="text-xs">SKTS(Sebelum Kerja, Tidak Sekolah)</li>
              <li class="text-xs">PSD(Pelajar SD)</li>
              <li class="text-xs">USDTS(Usia SD Tidak Sekolah)</li>
              <li class="text-xs">PSM(Pelajar SD)</li>
              <li class="text-xs">USMPTS(Usia SMP Tidak Sekolah)</li>
              <li class="text-xs">PSMU(Pelajar SMU)</li>
              <li class="text-xs">USMUTS(Usia SMU Tidak Sekolah)</li>
            </ul>
          </div>
          <div class="col-lg-4 mb-lg-0 mb-4">
            <ul class="mb-0">
              <li class="text-xs">M(Mahasiswa)</li>
              <li class="text-xs">PKeb(Petani Kebun)</li>
              <li class="text-xs">Nel(Nelayana)</li>
              <li class="text-xs">Tkay(Tukang Kayu)</li>
              <li class="text-xs">B(Buruh)</li>
              <li class="text-xs">P(Pengusaha)</li>
              <li class="text-xs">AKamp(Aparat Kampung)</li>
            </ul>
          </div>
          <div class="col-lg-4 mb-lg-0 mb-4">
            <ul class="mb-0">
              <li class="text-xs">IRT(Ibu Rumah Tangga)</li>
              <li class="text-xs">KSwa(Karyawan Swasta)</li>
              <li class="text-xs">PGu(PNS Guru)</li>
              <li class="text-xs">Pdt(Pendeta)</li>
              <li class="text-xs">Hon(Honorer)</li>
              <li class="text-xs">PL(Pekerjaan Lain)</li>
              <li class="text-xs">TBM(Tidak Bekerja Manual)</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
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
      labels: ['<5 Tahun','5-12 Tahun','12-18 Tahun','18-45 Tahun','45-60 Tahun','>60 Tahun'],
      datasets: [
        {
          label: "Laki-Laki",
          weight: 5,
          borderWidth: 0,
          borderRadius: 4,
          backgroundColor: 'rgba(54, 162, 235)',
          data: [43,42,44,179,44,28],
          fill: false,
          maxBarThickness: 35
        }, {
          label: "Perempuan",
          weight: 5,
          borderWidth: 0,
          borderRadius: 4,
          backgroundColor: 'rgba(255, 99, 132)',
          data: [44,47,33,147,37,28],
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
      labels: ['Berau','Banjar','Dayak','Bugis','Jawa','Timor','Batak','Sunda','Bali','NTB'],
      datasets: [{
        data: [24,9,223,402,33,5,4,5,10,1],
        backgroundColor: [
          '#006ba6',
          '#0281d3',
          '#0496ff',
          '#d81159',
          '#f69248',
          '#82a9a1',
          '#ffbc42',
          '#ec674e',
          '#b41f58',
          '#8f2d56',
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
      labels: ['Islam','Kristen','Khatolik','Budha','Hindu','Lainnya',],
      datasets: [{
        data: [510,196,4,0,6,0],
        backgroundColor: [
          '#006ba6',
          '#0281d3',
          '#0496ff',
          '#d81159',
          '#f69248',
          '#82a9a1',
          '#ffbc42',
          '#ec674e',
          '#b41f58',
          '#8f2d56',
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
      labels: ['Balita','PSD','TSD','TTSD','PSMP','TSMP','TTSMP','PSMU','TSMU','TTSMU','M','D','S','Dr','TTK','TPS'],
      datasets: [
        {
          label: "Laki-Laki",
          weight: 5,
          borderWidth: 0,
          borderRadius: 4,
          backgroundColor: 'rgba(54, 162, 235)',
          data: [43,25,132,45,3,30,4,4,48,2,4,5,9,0,0,18],
          fill: false,
          maxBarThickness: 35
        }, {
          label: "Perempuan",
          weight: 5,
          borderWidth: 0,
          borderRadius: 4,
          backgroundColor: 'rgba(255, 99, 132)',
          data: [44,34,122,50,5,31,3,8,31,1,1,2,6,0,0,6],
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
