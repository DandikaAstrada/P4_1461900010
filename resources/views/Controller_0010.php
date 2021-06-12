<?php

namespace App\Http\Controllers;

use App\Models\RakBuku;
use Illuminate\Http\Request;
use App\Exports\BukuExport;
use Maatwebsite\Excel\Facades\Excel;

class TugasPraktikum4Controller extends Controller
{
    public function DATA_1461900010(Request $request)
    {
        $query = RakBuku::join('buku', 'buku.id', '=', 'rak_buku.id_buku')
                                ->join('jenis_buku', 'jenis_buku.id', '=', 'rak_buku.id_jenis_buku');

        if($request->has("search")){
            $query->where('buku.judul', 'like', '%' . $request->search . '%');
        }

        $buku = $query->get();

        return view('tugaspraktikum_0010', compact('buku'));
    }

    public function export_excel()
	{
		return Excel::download(new BukuExport, 'DATA_1461900010.xlsx');
	}
}
