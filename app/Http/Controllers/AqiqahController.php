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

    public function create()
    {
        return view('aqiqah.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|unique:aqiqah,email',
            'lokasi' => 'required|string|max:100',
            'link' => 'nullable|string',
        ]);

        Aqiqah::create($request->all());

        return redirect()->route('aqiqah.index')->with('success', 'Aqiqah created successfully.');
    }

    
}
