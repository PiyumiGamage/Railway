<?php

namespace App\Http\Controllers\GuidePanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuiderController extends Controller
{
    public function index(){

        return view('guide.dashboard');
    
      }


}
