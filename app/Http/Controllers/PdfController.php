<?php

namespace App\Http\Controllers;

use PDF;
use App\Materi;
use App\Hasil;
use App\Riwayat;
use Auth;

use Illuminate\Http\Request;

class PdfController extends Controller
{
	public function print($id)
	{	
		$hasil = Hasil::find($id);
		
		// Riwayat::Create([
  //           'namauser' => Auth::user()->name,
  //           'aksi' => 'Telah Mencetak sertifikat : '.$hasil->namahasil,
  //       ]);

		$data = Materi::all();
		$pdf = PDF::loadview('pdf', compact('data', 'hasil'))->setPaper('A4','landscape');
		return $pdf->stream();
	}

	public function welcome()
    {
        $hasil = Hasil::all();
        $kategori = Materi::where('kategori');
        $materi = Materi::paginate(10);
        $count = Materi::Where('isi')->orderBy('created_at','DESC')->paginate(5);
        return view('welcome', ['materi' => $materi,'hasil' => $hasil, 'count' => $count], compact('kategori'));
    }
}
