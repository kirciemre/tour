<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // TÜM SAYFALAR ADMIN CONTROLLERINDA OLMAYACAGI İÇİN WEB DEKİ GRUBA MİDDLEWARE VERMEK DAHA MANTIKLI!
    // public function __construct(){ 
    //     $this->middleware('auth');
    // }

    public function index() {
        return view('admin.index');
    }
}
