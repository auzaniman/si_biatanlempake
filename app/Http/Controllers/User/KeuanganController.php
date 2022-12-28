<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\KeuanganModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $pendapatan = KeuanganModel::where('tipe_anggaran', 'pendapatan')
        ->where('tahun_anggaran', date('Y'))
        ->get();
      $pengeluaran = KeuanganModel::where('tipe_anggaran', 'pengeluaran')
        ->where('tahun_anggaran', date('Y'))
        ->get();

      $get_total_pendapatan = DB::table('keuangan')
        ->where('tipe_anggaran', 'pendapatan')
        ->where('tahun_anggaran', date('Y'))
        ->sum('jumlah_nominal');
      $get_total_pengeluaran = DB::table('keuangan')
        ->where('tipe_anggaran', 'pengeluaran')
        ->where('tahun_anggaran', date('Y'))
        ->sum('jumlah_nominal');

      $get_sisa_keuangan = $get_total_pendapatan - $get_total_pengeluaran;

      $pendapatan_anggaran = [];
      $pendapatan_nominal = [];
      $pengeluaran_anggaran = [];
      $pengeluaran_nominal = [];

      foreach($pendapatan as $row) {
        $pendapatan_anggaran[] = $row->nama_anggaran;
        $pendapatan_nominal[] = $row->jumlah_nominal;
      }

      foreach($pengeluaran as $row) {
        $pengeluaran_anggaran[] = $row->nama_anggaran;
        $pengeluaran_nominal[] = $row->jumlah_nominal;
      }

      return view('superuser.pages.keuangan', compact('pendapatan','pengeluaran','get_total_pendapatan','get_total_pengeluaran','get_sisa_keuangan','pendapatan_anggaran','pendapatan_nominal','pengeluaran_anggaran','pengeluaran_nominal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
