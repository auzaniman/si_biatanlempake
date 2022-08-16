@extends('superuser.layouts.app')

@section('title')
Rencana
@endsection

@section('content')
{{-- Foto Kades dan Visi Misi --}}
<div class="row">
  <div class="col-lg-4 mb-lg-0 mb-4">
    <div class="card">
      <div class="card-header p-0 bg-transparent">
        <img src="{{url('frontend/assets/img/kepdes.jpeg')}}" class="img-fluid border-radius-top-end-lg-xl border-radius-xl" alt="foto kades">
      </div>
    </div>
  </div>
  <div class="col-lg-8 mb-lg-0">
    <div class="card h-100">
      <div class="card-body pb-0 pt-3 bg-transparent">
        <i class="fa fa-eye text-warning" aria-hidden="true"></i>
        <h6 class="text-capitalize text-primary">VISI</h6>
        <p class="mb-1">
          “MEWUJUDKAN MASYARAKAT KAMPUNG BIATAN BAPINANG MENJADI MASYARAKAT AMANAH TAHUN 2023”
        </p>
        <p>
          <span class="font-weight-bold">A</span>  = Aktif,
          <span class="font-weight-bold">M</span>  = Makmur,
          <span class="font-weight-bold">A</span>  = Agamis,
          <span class="font-weight-bold">N</span>  = Nyaman,
          <span class="font-weight-bold">A</span>  = Aman,
          <span class="font-weight-bold">H</span>  = Harmonis
        </p>
      </div>
    </div>
  </div>
</div>
<div class="row mt-4">
  <div class="col-lg-12 mb-lg-0">
    <div class="card">
      <div class="card-body pb-0 pt-3 bg-transparent">
        <i class="fa fa-pencil text-warning" aria-hidden="true"></i>
        <h6 class="text-capitalize">MISI</h6>
        <ul class="mb-3 ps-4">
          <li>Membangun Persatuan dan Kerja Sama diantara Suku  dan Golongan</li>
          <li>Membangun Kerukunan antar umat beragama</li>
          <li>Membangun Pembangunan yang dibutuhkan di RT/Kampung</li>
          <li>Membangun Keterbukaan / transfaran kepada Masyarakat</li>
          <li>Membangun  Kualitas  Pelayanan Bagi  Masyarakat Kampung</li>
          <li>Melaksanakan tugas dengan baik sesuai dengan amanah yang diberikan masyarakat Kampung Biatan Bapinang</li>
          <li>Melanjutkan Program Pemerintah Pusat, Provinsi dan Kabupaten Berau</li>
          <li>Membina	Masyarakat	Kampung,	baik	kelompok	tani, karang taruna dll</li>
          <li>Menjadikan Kampung Biatan Bapinang contoh  bagi  Kampung yang ada disekitar Biatan</li>
          <li>Mengembangkan area konservasi sebagai wujud kepedulian lingkungan.</li>
        </ul>
      </div>
    </div>
  </div>
</div>
{{-- End --}}

{{-- Arah Kebijakan Pmbangunan Kampung --}}
<div class="row mt-4">
  <div class="col-lg-12 mb-lg-0">
    <div class="card">
      <div class="card-body pb-0 pt-3 bg-transparent">
        <i class="fa fa-star text-warning" aria-hidden="true"></i>
        <h6>ARAH KEBIJAKAN PEMBANGUNAN KAMPUNG</h6>
        <div class="card"></div>
        <p>
          Dalam rangka mewujudkan pencapaian Visi dan Misi Kampung Biatan Bapinang di tahun 2018-2023 maka arah kebijakan pembangunan Kampung diprioritaskan pada bidang kepentingan masyarakat miskin.
          <br>
          Strategi pembangunan kampung menjadi landasan dalam menentukan arah kebijakan kampung, prisip – prinsip dasar yang menjadi pedoman serta kerangka berfikir yang melatar belakangi upaya pencapaian visi dan misi yang akan dilaksanakan. Berdasarkan strategi tersebut selanjutnya dapat di jadikan pedoman dalam menentukan arah kebijakan ke uangan kampung kebijakan umum dan program pembangunan.
          <br>
          Untuk mencapai tujuan dan sasaran pembanguan yang telah dirumuskan, maka pemerintah kampung menempuh strategi dan kebijakan sebagai berikut :
        </p>
      </div>
    </div>
  </div>
</div>
<div class="row mt-4">
  <div class="col-12">
    <div class="card mb-4">
      <div class="card-body pb-0 pt-3">
        <div class="row">
          <div class="col-lg-6">
            <h6 class="mb-1"><i class="fa fa-lightbulb-o text-info me-2" aria-hidden="true"></i>STRATEGI</h6>
            <p>Peningkatan kesadaran masyarakt dibidang kesehatan dan pendidikan</p>
          </div>
          <div class="col-lg-6">
            <h6 class="mb-1"><i class="fa fa-file-text-o text-info me-2" aria-hidden="true"></i>KEBIJAKAN</h6>
            <p>
              meningkatkan	kegiatan pelayanan kesehatan berbasis masyarakat. mengembangkan kegiatan pendidikan pada usia dini.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12">
    <div class="card mb-4">
      <div class="card-body pb-0 pt-3">
        <div class="row">
          <div class="col-lg-6">
            <h6 class="mb-1"><i class="fa fa-lightbulb-o text-info me-2" aria-hidden="true"></i>STRATEGI</h6>
            <p>
              Pemberdayaan lembaga-lembaga ke masyarakatan agar lebih professional dan berfungsi dalam pengelolaan Pembangunan
            </p>
          </div>
          <div class="col-lg-6">
            <h6 class="mb-1"><i class="fa fa-file-text-o text-info me-2" aria-hidden="true"></i>KEBIJAKAN</h6>
            <ol class="ps-4">
              <li>
                Mengembangkan hubungan kemitraan pemerintah kampung, BPK, LPM dan warga masyarakat.
              </li>
              <li>
                mengembangkan demokratisasi dalam Penyelenggaraan pemerintahan kampung.
              </li>
              <li>
                Melibatkan secara aktif lembaga-lembaga kemasyarakatan dalam penyusunan	dan pelaksanaan perencanaan pembangunan kampung.
              </li>
              <li>
                Melibatkan secara aktif lembaga- lembaga kemasyarakatan dalam penyusunan	dan pelaksanaan pembangunan kampung.
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12">
    <div class="card mb-4">
      <div class="card-body pb-0 pt-3">
        <div class="row">
          <div class="col-lg-6">
            <h6 class="mb-1"><i class="fa fa-lightbulb-o text-info me-2" aria-hidden="true"></i>STRATEGI</h6>
            <p>Penguatan kapasitas pemerintah kampong dalam tata kelola/ruang/profile pemerintahan kampung yang baik.</p>
          </div>
          <div class="col-lg-6">
            <h6 class="mb-1"><i class="fa fa-file-text-o text-info me-2" aria-hidden="true"></i>KEBIJAKAN</h6>
            <p>
              Mengembangkan kemampuan aparat kampong dalam mengelolah pemerintahan. Mengasah kemampuan dengan sering mengikuti diklat-diklat yang diadakan.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12">
    <div class="card mb-4">
      <div class="card-body pb-0 pt-3">
        <div class="row">
          <div class="col-lg-6">
            <h6 class="mb-1"><i class="fa fa-lightbulb-o text-info me-2" aria-hidden="true"></i>STRATEGI</h6>
            <p>Pelestarian adat-istiadat</p>
          </div>
          <div class="col-lg-6">
            <h6 class="mb-1"><i class="fa fa-file-text-o text-info me-2" aria-hidden="true"></i>KEBIJAKAN</h6>
            <p>
              Dalam menyusun peraturan kampung memperhatikan nilai-nilai adat yang berlaku. Memfasilitasi upacara-upacara adat.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12">
    <div class="card mb-4">
      <div class="card-body pb-0 pt-3">
        <div class="row">
          <div class="col-lg-6">
            <h6 class="mb-1"><i class="fa fa-lightbulb-o text-info me-2" aria-hidden="true"></i>STRATEGI</h6>
            <p>Peningkatan jumlah dan kualitas sarana prasarana perekonomian kampung</p>
          </div>
          <div class="col-lg-6">
            <h6 class="mb-1"><i class="fa fa-file-text-o text-info me-2" aria-hidden="true"></i>KEBIJAKAN</h6>
            <p>
              Meningkatkan  produktifitas lahan terutama lahan-lahan yang terbengkalai. Membentuk	dan	mengembangkan badan usaha kampung. Menggali potensi-potensi kampung
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12">
    <div class="card mb-4">
      <div class="card-body pb-0 pt-3">
        <div class="row">
          <div class="col-lg-6">
            <h6 class="mb-1"><i class="fa fa-lightbulb-o text-info me-2" aria-hidden="true"></i>STRATEGI</h6>
            <p>Peningkatan	keamanan	dan ketertiban kampung</p>
          </div>
          <div class="col-lg-6">
            <h6 class="mb-1"><i class="fa fa-file-text-o text-info me-2" aria-hidden="true"></i>KEBIJAKAN</h6>
            <ol class="ps-4">
              <li>
                Menghidupkan	kembali kegiatan siskamling
              </li>
              <li>
                Membuat tata tertib untuk mengatur jam bertamu,menanggulangi dan memberantas pencuri.
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12">
    <div class="card mb-4">
      <div class="card-body pb-0 pt-3">
        <div class="row">
          <div class="col-lg-6">
            <h6 class="mb-1"><i class="fa fa-lightbulb-o text-info me-2" aria-hidden="true"></i>STRATEGI</h6>
            <p>Peningkatan	kebersihan	dan keindahan kampung</p>
          </div>
          <div class="col-lg-6">
            <h6 class="mb-1"><i class="fa fa-file-text-o text-info me-2" aria-hidden="true"></i>KEBIJAKAN</h6>
            <ol class="ps-4">
              <li>
                Menggairahkan kembali jum’ at bersih
              </li>
              <li>
                Membuat aturan tentang ternak yang berkeliaran
              </li>
              <li>
                Memfasilitasi peningkatan ke indahan kampung.
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12">
    <div class="card mb-4">
      <div class="card-body pb-0 pt-3">
        <div class="row">
          <div class="col-lg-6">
            <h6 class="mb-1"><i class="fa fa-lightbulb-o text-info me-2" aria-hidden="true"></i>STRATEGI</h6>
            <p>Pengadaan	permodalan	bagi Masyarakat</p>
          </div>
          <div class="col-lg-6">
            <h6 class="mb-1"><i class="fa fa-file-text-o text-info me-2" aria-hidden="true"></i>KEBIJAKAN</h6>
            <p>
              pengadaan ,perluasan lapangan kerja. memberdayakan kelompok SPP , UKM
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12">
    <div class="card mb-4">
      <div class="card-body pb-0 pt-3">
        <div class="row">
          <div class="col-lg-6">
            <h6 class="mb-1"><i class="fa fa-lightbulb-o text-info me-2" aria-hidden="true"></i>STRATEGI</h6>
            <p>Peningkatan	keterampilan	dan sumber daya manusia</p>
          </div>
          <div class="col-lg-6">
            <h6 class="mb-1"><i class="fa fa-file-text-o text-info me-2" aria-hidden="true"></i>KEBIJAKAN</h6>
            <p>
              Pelatihan	bagi	masyarakat tentang mengelola usaha. Menggali potensi sesuai dengan bidang kerja.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12">
    <div class="card">
      <div class="card-body pb-0 pt-3">
        <div class="row">
          <div class="col-lg-6">
            <h6 class="mb-1"><i class="fa fa-lightbulb-o text-info me-2" aria-hidden="true"></i>STRATEGI</h6>
            <p>Peningkatan area konservasi SDA Kampung Biatan Bapinang</p>
          </div>
          <div class="col-lg-6">
            <h6 class="mb-1"><i class="fa fa-file-text-o text-info me-2" aria-hidden="true"></i>KEBIJAKAN</h6>
            <ol class="ps-4">
              <li>
                Advokasi pengelolaan ANKT di kampung Biatan Bapinang
              </li>
              <li>
                Pengelolaan wisata konservasi air panas;
              </li>
              <li>
                Pengelolaan konservasi area mangrove;
              </li>
              <li>
                Hutan potensi ANKT (hutan perbukitan);
              </li>
              <li>
                Hutan potensi ANKT (2);
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{{-- End --}}

{{-- Strategi Pencapaian --}}
<div class="row mt-4">
  <div class="col-12 mb-lg-0 mb-4">
    <div class="card">
      <div class="card-body pb-0 pt-3 bg-transparent">
        <i class="fa fa-star text-warning" aria-hidden="true"></i>
        <h6>STRATEGI PENCAPAIAN</h6>
        <div class="card"></div>
        <p>
          Dari berbagai usulan program yang meliputi bidang pendidikan, kesehatan, sarana dan prasarana, lingkungan hidup, sosial budaya, pemerintahan, usaha masyarakat, pertanian dan pariwisata, akan dilaksanakan secara bertahap mulai tahun 2018 sampai dengan tahun 2023.
          <br>
          Untuk mencapai tujuan tersebut akan dirumuskan kembali secara lebih rinci dalam penyusunan RKP (Rencana Kerja Pembangunan) Kampung yang dirumuskan setiap 1 (satu) tahun anggaran dan disahkan melalui surat keputusan Kepala Kampung Biatan Bapinang.
        </p>
      </div>
    </div>
  </div>
</div>
{{-- End --}}
@endsection
