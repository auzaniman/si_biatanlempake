<?php

namespace App\Http\Controllers\User\ProfileAkun;

use App\Http\Controllers\Controller;
use App\Http\Requests\FotoProfileRequest;
use App\Models\Berkas;
use App\Models\FotoProfileModel;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileAkunController extends Controller
{
    public function index()
    {
      // $user = User::where('id', '=', Auth::user()->id)->first();

      $data = User::select('users.*','pk.name as provinsiktp','pd.name as provinsidom','rk.name as kotaktp','rd.name as kotadom', 'dk.name as kecktp', 'dd.name as kecdom', 'vk.name as desaktp', 'vd.name as desadom')
      ->join('provinces as pk', 'users.provinsi_ktp', 'pk.id')
      ->join('regencies as rk', 'users.kota_ktp', 'rk.id')
      ->join('districts as dk', 'users.kecamatan_ktp', 'dk.id')
      ->join('villages as vk', 'users.desa_ktp', 'vk.id')
      ->leftJoin('provinces as pd', 'users.provinsi_domisili', 'pd.id')
      ->leftJoin('regencies as rd', 'users.kota_domisili', 'rd.id')
      ->leftJoin('districts as dd', 'users.kecamatan_domisili', 'dd.id')
      ->leftJoin('villages as vd', 'users.desa_domisili', 'vd.id')
      ->where('users.id', auth()->user()->id)
      ->first();

      $provinces = Province::pluck('name', 'id');

      $foto = FotoProfileModel::where('user_id', '=', Auth::user()->id)->first();

      return view('superuser.pages.profileakun.profileakun',
        compact('data','foto','provinces')
      );
    }

    public function getkabupatenprofile(Request $request) {
      $id_provinsi = $request->id_provinsi;

      $kabupatens = Regency::where('province_id',$id_provinsi)->get();

      $option = "<option>== Pilih Kota/Kabupaten ==</option>";

      foreach($kabupatens as $kabupaten) {
        $option.= "<option value='$kabupaten->id'>$kabupaten->name</option>";
      }
      echo $option;
    }

    public function getkecamatanprofile(Request $request) {
      $id_kabupaten = $request->id_kabupaten;

      $kecamatans = District::where('regency_id',$id_kabupaten)->get();

      $option = "<option>== Pilih Kecamatan ==</option>";

      foreach($kecamatans as $kecamatan) {
        $option.= "<option value='$kecamatan->id'>$kecamatan->name</option>";
      }
      echo $option;
    }

    public function getdesaprofile(Request $request) {
      $id_kecamatan = $request->id_kecamatan;

      $desas = Village::where('district_id',$id_kecamatan)->get();

      $option = "<option>== Pilih Desa ==</option>";

      foreach($desas as $desa) {
        $option.= "<option value='$desa->id'>$desa->name</option>";
      }
      echo $option;
    }

    public function create()
    {
        //
    }

    public function store(FotoProfileRequest $request)
    {
      $foto = new FotoProfileModel();
      $foto->user_id = $request->user_id;
      $foto['foto_profile'] = $request->file('foto_profile')->store('', 'public');

      $foto->save();

      return redirect()
        ->back()
        ->with([
          'message' => 'Permohonan berhasil ditambahkan',
          'status' => 'Sukses! Foto Profile berhasil ditambahkan'
      ]);
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
      $user = User::where('id', '=', Auth::user()->id)->first();
      $user->name = $request->name;
      $user->email = $request->email;
      $user->username = $request->username;
      $user->tempat_lahir = $request->tempat_lahir;
      $user->tanggal_lahir = $request->tanggal_lahir;
      $user->nik = $request->nik;
      $user->kk = $request->kk;
      $user->npwp = $request->npwp;
      $user->kelamin = $request->kelamin;
      $user->pekerjaan = $request->pekerjaan;
      $user->agama = $request->agama;
      $user->perkawinan = $request->perkawinan;
      $user->kewarganegaraan = $request->kewarganegaraan;
      $user->no_telpon = $request->no_telpon;
      $user->no_wa = $request->no_wa;
      $user->pendidikan = $request->pendidikan;

      $user->save();

      return redirect()
        ->back()
        ->with([
          'message' => 'berhasil diubah',
          'status' => 'success'
      ]);
    }

    public function updatealamatktp(Request $request, $id)
    {
      $user = User::where('id', '=', Auth::user()->id)->first();
      $user->provinsi_ktp = $request-> provinsi_ktp;
      $user->kota_ktp = $request-> kota_ktp;
      $user->kecamatan_ktp = $request-> kecamatan_ktp;
      $user->desa_ktp = $request-> desa_ktp;
      $user->rt_ktp = $request-> rt_ktp;
      $user->rw_ktp = $request-> rw_ktp;

      $user->save();

      return redirect()
        ->back()
        ->with([
          'message' => 'berhasil diubah',
          'status' => 'success'
      ]);
    }

    public function updatealamatdomisili(Request $request, $id)
    {
      $user = User::where('id', '=', Auth::user()->id)->first();
      $user->provinsi_domisili = $request-> provinsi_domisili;
      $user->kota_domisili = $request-> kota_domisili;
      $user->kecamatan_domisili = $request-> kecamatan_domisili;
      $user->desa_domisili = $request-> desa_domisili;
      $user->rt_domisili = $request-> rt_domisili;
      $user->rw_domisili = $request-> rw_domisili;

      $user->save();

      return redirect()
        ->back()
        ->with([
          'message' => 'berhasil diubah',
          'status' => 'success'
      ]);
    }

    public function destroy($id)
    {
      $foto = FotoProfileModel::where('id', $id)->first();
      $foto->delete();

      return redirect()
        ->back()
        ->with([
          'message' => 'berhasil dihapus',
          'status' => 'Sukses! Foto Profile Berhasil dihapus'
      ]);
    }

    public function kumpulan_berkas()
    {
      $foto = FotoProfileModel::where('user_id', '=', Auth::user()->id)->first();
      $berkas = Berkas::where('user_id', '=', Auth::user()->id)->first();

      $data = User::select('users.*','pk.name as provinsiktp','pd.name as provinsidom','rk.name as kotaktp','rd.name as kotadom', 'dk.name as kecktp', 'dd.name as kecdom', 'vk.name as desaktp', 'vd.name as desadom')
      ->join('provinces as pk', 'users.provinsi_ktp', 'pk.id')
      ->join('regencies as rk', 'users.kota_ktp', 'rk.id')
      ->join('districts as dk', 'users.kecamatan_ktp', 'dk.id')
      ->join('villages as vk', 'users.desa_ktp', 'vk.id')
      ->leftJoin('provinces as pd', 'users.provinsi_domisili', 'pd.id')
      ->leftJoin('regencies as rd', 'users.kota_domisili', 'rd.id')
      ->leftJoin('districts as dd', 'users.kecamatan_domisili', 'dd.id')
      ->leftJoin('villages as vd', 'users.desa_domisili', 'vd.id')
      ->where('users.id', auth()->user()->id)
      ->first();

      return view('superuser.pages.profileakun.berkas2',
        compact('data','berkas','foto')
      );
    }
}
