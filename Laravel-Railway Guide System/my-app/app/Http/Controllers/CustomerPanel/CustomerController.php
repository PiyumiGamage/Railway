<?php

namespace App\Http\Controllers\CustomerPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class CustomerController extends Controller
{
    public function index(){
        
        if(Auth::user()->usertype == 'areamanager'){
            return redirect()->route('areamanager.dashboard');
        }elseif(Auth::user()->usertype == 'guide'){
            return redirect()->route('guide.dashboard');
        }
        
        return view('dashboard');
    }
}
