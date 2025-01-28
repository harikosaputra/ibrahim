<?php

namespace App\Http\Controllers;

use App\Models\Aqiqah;
use Illuminate\Http\Request;

class AqiqahController extends Controller
{
    public function index()
    {
        $aqiqahs = Aqiqah::all(); // Tetap bisa menggunakan nama variabel seperti ini
        return view('aqiqah.index', compact('aqiqahs'));
    }


    public function edit(Aqiqah $aqiqah)
    {
        return view('aqiqah.edit', compact('aqiqahs'));
    }
    
}
