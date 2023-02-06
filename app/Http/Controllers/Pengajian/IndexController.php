<?php

namespace App\Http\Controllers\Pengajian;

use App\Http\Controllers\Controller;
use App\Models\Pengajian;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('pengajian.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Pengajian $pengajian)
    {
        //
    }

    public function edit(Pengajian $pengajian)
    {
        return view('pengajian.edit');
    }

    public function destroy(Pengajian $pengajian)
    {
        //
    }
}
