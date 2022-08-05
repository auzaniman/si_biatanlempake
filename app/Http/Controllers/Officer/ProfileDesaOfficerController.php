<?php

namespace App\Http\Controllers\Officer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ChartBar;
use App\Models\SettingModel;
use App\Models\User;

class ProfileDesaOfficerController extends Controller
{
  public function index()
  {
    $setprofile = SettingModel::select('id', 'img_desa', 'sejarah_kampung', 'video_desa')->first();

    $charts = ChartBar::all();

    $total_kk = User::distinct()->count('kk');
    $total_warga = User::selectRaw("COUNT(CASE WHEN desa_ktp = 6405110005  THEN 1 END) AS ktp")
    ->selectRaw("COUNT(CASE WHEN desa_domisili = 6405110005 THEN 1 END) AS domisili")
    ->first();

    $kelamin = User::selectRaw("COUNT(CASE WHEN kelamin = 'Laki-Laki'  THEN 1 END) AS laki")
    ->selectRaw("COUNT(CASE WHEN kelamin = 'Perempuan'  THEN 1 END) AS perempuan")
    ->first();

    $countpendidikan = User::selectRaw("COUNT(CASE WHEN pendidikan = 'SD'  THEN 1 END) AS sd")
      ->selectRaw("COUNT(CASE WHEN pendidikan = 'SMP' THEN 1 END) AS smp")
      ->selectRaw("COUNT(CASE WHEN pendidikan = 'SMA' THEN 1 END) AS sma")
      ->selectRaw("COUNT(CASE WHEN pendidikan = 'D1'  THEN 1 END) AS d1")
      ->selectRaw("COUNT(CASE WHEN pendidikan = 'D2'  THEN 1 END) AS d2")
      ->selectRaw("COUNT(CASE WHEN pendidikan = 'D3'  THEN 1 END) AS d3")
      ->selectRaw("COUNT(CASE WHEN pendidikan = 'D4'  THEN 1 END) AS d4")
      ->selectRaw("COUNT(CASE WHEN pendidikan = 'S1'  THEN 1 END) AS s1")
      ->selectRaw("COUNT(CASE WHEN pendidikan = 'S2'  THEN 1 END) AS s2")
      ->selectRaw("COUNT(CASE WHEN pendidikan = 'S3'  THEN 1 END) AS s3")
      ->first();

    $sd[] = $countpendidikan->sd;
    $smp[] = $countpendidikan->smp;
    $sma[] = $countpendidikan->sma;
    $d1[] = $countpendidikan->d1;
    $d2[] = $countpendidikan->d2;
    $d3[] = $countpendidikan->d3;
    $d4[] = $countpendidikan->d4;
    $s1[] = $countpendidikan->s1;
    $s2[] = $countpendidikan->s2;
    $s3[] = $countpendidikan->s3;

    $rt = [];
    $jmlwarga = [];
    $jmlkepala = [];

    foreach($charts as $row) {
      $rt[] = $row->rt;
      $jmlwarga[] = $row->jumlahWarga;
      $jmlkepala[] = $row->jumlahKepalaKeluarga;
    }

    return
    view('officer.pages.profiledesa.profiledesa',
      compact('setprofile','rt','total_warga','total_kk','kelamin','sd','smp','sma','d1','d2','d3','d4','s1','s2','s3','jmlwarga','jmlkepala')
    );
  }
  public function create()
  {
      //
  }

  public function store(Request $request)
  {
    $chartbar = new ChartBar([
      'jumlahWarga' => $request->get('jumlahWarga'),
      'jumlahKepalaKeluarga' => $request->get('jumlahKepalaKeluarga'),
      'rt' => $request->get('rt'),
    ]);
    $chartbar->save();

    return redirect()->back()
    ->with([
        'message' => 'berhasil ditambahkan',
        'status' => 'Sukses! Data chart berhasil ditambahkan'
    ]);
  }

  public function show($id)
  {
      //
  }

  public function edit($id)
  {

  }

  public function update(Request $request, $id)
  {
    ChartBar::where('id', $id)
      ->update([
        'jumlahWarga' => $request->jumlahWarga,
        'jumlahKepalaKeluarga' => $request->jumlahKepalaKeluarga,
        'rt' => $request->rt,
      ]);

    return redirect()->back()
    ->with([
        'message' => 'berhasil diubah',
        'status' => 'Data chart berhasil diubah'
    ]);
    // return $request;
  }

  public function destroy($id)
  {
    $chart = ChartBar::where('id', $id)->first();
    $chart->delete();

    return redirect()->back()
    ->with([
        'message' => 'berhasil dihapus',
        'status' => 'Data chart berhasil dihapus'
    ]);

  }

  public function index_edit()
    {
      $charts = ChartBar::all();
      return view('officer.pages.profiledesa.chart.edit', [
        'charts' => $charts
      ]);
    }
}
