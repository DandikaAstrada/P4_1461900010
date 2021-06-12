<?php

namespace App\Exports;

use App\Buku;
use App\Models\RakBuku;
use Maatwebsite\Excel\Concerns\FromCollection;

class BukuExport implements FromCollection
{
    public function collection()
    {
        $buku = RakBuku::join('buku', 'buku.id', '=', 'rak_buku.id_buku')
                        ->join('jenis_buku', 'jenis_buku.id', '=', 'rak_buku.id_jenis_buku')->get();
        return $buku;
    }
}