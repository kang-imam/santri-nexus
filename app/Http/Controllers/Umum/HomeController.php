<?php

namespace App\Http\Controllers\Umum;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index()
  {
    $pageConfigs = ['myLayout' => 'front'];
    return view('content.umum.home', ['pageConfigs' => $pageConfigs]);
  }
}
