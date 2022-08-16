<?php

namespace App\Http\Controllers\Officer;

use App\Http\Controllers\Controller;
use App\Models\SettingModel;
use Illuminate\Http\Request;

class TantanganDanPotensiOfficerController extends Controller
{
  public function index(Request $request)
  {
    // $getdatatantangan = SettingModel::select('id', 'kategori_tdp', 'gambar_tdp', 'judul_tdp', 'desc_tdp')
    //   ->where('kategori_tdp', 1)
    //   ->get();

    //   $getdatapotensi = SettingModel::select('id', 'kategori_tdp', 'gambar_tdp', 'judul_tdp', 'desc_tdp')
    //   ->where('kategori_tdp', 2)
    //   ->get();

    return view('officer.pages.tantangandanpotensi')->with('i', ($request->input('page', 1) - 1) * 20);
  }

  public function create()
  {
      //
  }

  public function store(Request $request)
  {
      //
  }

  public function show($id)
  {
      //
  }

  public function edit($id)
  {
      //
  }

  public function update(Request $request, $id)
  {
      //
  }

  public function destroy($id)
  {
      //
  }
}
