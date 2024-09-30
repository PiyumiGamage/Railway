<?php

namespace App\Http\Controllers\AreamanagerPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AreamanagerController extends Controller
{
  
  public function index(){

    return view('areamanager.dashboard');

  }
  
  
  
    
}
