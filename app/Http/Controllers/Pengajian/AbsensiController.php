<?php

namespace App\Http\Controllers\Pengajian;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function index()
    {
        return view('pengajian.absensi', [
        ]);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            "checkbox" => "",
        ]);
        return $request;
        // return $validate;
    }
}
