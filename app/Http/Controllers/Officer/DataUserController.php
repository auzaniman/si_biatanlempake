<?php

namespace App\Http\Controllers\Officer;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DataUserController extends Controller
{
  public function index(Request $request)
  {
    $pagination = 15;
    $getdata = User::paginate($pagination);

    return view('officer.pages.datauser',
      compact('getdata')
    )->with('i', ($request->input('page', 1) - 1) * $pagination);;
  }
}
