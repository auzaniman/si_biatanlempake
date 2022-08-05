<?php

namespace App\Http\Controllers\Officer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SettingModel;

class SettingController extends Controller
{
  public function index()
  {
    $getdatapropdesa = SettingModel::select('id', 'img_desa', 'video_desa', 'sejarah_kampung')->first();

    return view('officer.pages.setting.setting', compact('getdatapropdesa'));
  }

  public function storePropDesa(Request $request)
  {
    $profiledesa = new SettingModel();

    $profiledesa->sejarah_kampung = $request->sejarah_kampung;
    $profiledesa->video_desa = $request->video_desa;
    $profiledesa['img_desa'] = $request->file('img_desa')->store('', 'public');

    $profiledesa->save();

    return redirect()->back()->with([
      'message' => 'Profile Desa berhasil Ditambahkan',
      'status' => 'Profile Desa berhasil Ditambahkan'
    ]);
  }

  public function updatePropDesa(Request $request, $id)
  {
    $profiledesa = SettingModel::select('id', 'img_desa', 'video_desa', 'sejarah_kampung')->where('id', 1)->first();

    $profiledesa->sejarah_kampung = $request->sejarah_kampung;
    $profiledesa->video_desa = $request->video_desa;
    $profiledesa['img_desa'] = $request->file('img_desa')->store('', 'public');

    $profiledesa->save();

    return redirect()->back()->with([
      'message' => 'Profile Desa berhasil Diubah',
      'status' => 'Profile Desa berhasil Diubah'
    ]);
  }

  public function storeTDP(Request $request)
  {
    $tdp = new SettingModel();

    $tdp->kategori_tdp = $request->kategori_tdp;
    $tdp->judul_tdp = $request->judul_tdp;
    $tdp->desc_tdp = $request->desc_tdp;
    $tdp['gambar_tdp'] = $request->file('gambar_tdp')->store('', 'public');

    $tdp->save();

    return redirect()->back()->with([
      'message' => 'Data berhasil Ditambahkan',
      'status' => 'Data berhasil Ditambahkan'
    ]);
  }

  public function updateTDP(Request $request, $id)
  {
    $tdp = SettingModel::where('id', $id)->first();

    $tdp->judul_tdp = $request->judul_tdp;
    $tdp->desc_tdp = $request->desc_tdp;
    $tdp['gambar_tdp'] = $request->file('gambar_tdp')->store('', 'public');

    $tdp->save();

    return redirect()->back()->with([
      'message' => 'Data berhasil Diubah',
      'status' => 'Data berhasil Diubah'
    ]);
  }
}
