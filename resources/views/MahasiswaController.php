<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class MahasiswaController extends Controller
{
    public function generate()
    {
        $mhs = \App\Models\Mahasiswa::All();
        $pdf = PDF::loadview('mahasiswa_pdf',['mahasiswa'=>$mhs]);
        return $pdf->stream();
    }
}
