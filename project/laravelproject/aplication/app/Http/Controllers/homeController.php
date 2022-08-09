<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use App\Models\POST_TABLE;
use Illuminate\Database\Eloquent\Model;

class homeController extends Controller
{
     public function index() {
        $Look=POST_TABLE::get();
        return view('home')->with('string',$Look);
    }
    
}
