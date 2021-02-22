<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Materi;
use App\Hasil;
use App\Laporan;
use App\Riwayat;
// use DB;
use App\User;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    
    public function index()
    {   
        $hasil = Hasil::all();
        $kategori = Materi::where('kategori');
        $materi = Materi::paginate(10);
        $count = Materi::Where('isi')->orderBy('created_at','DESC')->paginate(5);
        return view('murid.home', ['materi' => $materi,'hasil' => $hasil, 'count' => $count], compact('kategori'));
    }

    public function hasil(Request $request, $id){
        $message =  [
            'required' => 'Tidak Boleh Kosong!',
            'min' => 'tidak boleh kurang!',
            'max' => 'tidak boleh lebih!',
        ];
        $this->validate($request, [
            'namahasil' => 'required',
            'status' => 'required',
            'dokumenhasil' => 'required|mimes:zip,rar',
        ], $message);

        if($request->dokumenhasil)
        {
            $file = $request->file('dokumenhasil');
            $acak  = $file->getClientOriginalExtension();
            $fileName = $file->getClientOriginalname(); 
            $request->file('dokumenhasil')->move("hasilpembelajaran/", $fileName);
            $dokumenhasil = $fileName;
        } else {
            $dokumenhasil = NULL;
        }

        Hasil::Create([
            'id_materi' => $request->get('id_materi'),
            'namahasil' => $request->get('namahasil'),
            'namauser' => $request->get('namauser'),
            'sertifikat' => $request->get('sertifikat'),
            'status' => $request->get('status'),
            'id_user' => $request->get('id_user'),
            'dokumenhasil' => $dokumenhasil,

            // 'status' => 'Sedang Ditinjau',
            // 'id_user' => auth()->user()->id,
            // 'button' => 'ya',

        ]);

        $materi = Materi::find($id);

        Laporan::Create([
            'namauser' => Auth::user()->name,
            'kegiatan' => 'Telah belajar materi : '.$materi->nama,
        ]);

        Riwayat::Create([
            'namauser' => Auth::user()->name,
            'aksi' => 'Telah belajar materi : '.$materi->nama,
        ]);

        // dd($lapor);

        return redirect()->back();
    }

    public function materi($id){
        $materi = Materi::find($id);
        $hasil = Hasil::where('id_materi', $id)->where('id_user', auth()->user()->id)->first();
        $sertifikat = Materi::where('sertifikat');
        $lulus = Hasil::where('status')->get();
        return view('murid.materi', compact('materi', 'hasil', 'sertifikat', 'lulus'));
    }

    public function test(){
       $hasil = Hasil::all();
       $materi = Materi::paginate(5);
       $count = Materi::Where('isi')->orderBy('created_at','DESC')->paginate(5);
       return view('home', ['materi' => $materi,'hasil' => $hasil, 'count' => $count]);
   }

   public function indexhasil(){
       $user = Hasil::where('id_user', auth()->user()->id)->first();
       $hasil = Hasil::all();
       $materi = Materi::where('sertifikat')->get();
       return view('murid.hasil', compact('hasil', 'materi','user'));
   }

   public function deletehasil($id){
    $hasil = Hasil::find($id);

    Riwayat::Create([
            'namauser' => Auth::user()->name,
            'aksi' => 'Akan mengulangi pelajaran : '.$hasil->namahasil,
        ]);

    $hasil->delete();

    return redirect('/materi/'.$hasil->id_materi);
}

public function pengaturan(){
    $pas = User::find(Auth::user()->password);
    $password = Hash::needsRehash($pas);
    return view('murid.pengaturan', compact('password'));
}

public function pengaturanupdate(Request $request){
    Riwayat::Create([
            'namauser' => Auth::user()->name,
            'aksi' => 'Telah Mengubah Akun',
        ]);

    User::find(Auth::user()->id)->update([
        'name' => $request->get('name'),
        'email' => $request->get('email'),
    ]);

    return redirect('/pengaturan');
}

public function pengaturanpassword(Request $request){
     Riwayat::Create([
            'namauser' => Auth::user()->name,
            'aksi' => 'Telah Mengubah Password',
        ]);

    User::find(Auth::user()->id)->update([
        'password' => Hash::make($request->password),
    ]);

    return redirect('/pengaturan');
}

public function pemograman(){
    $pem = Materi::all();
    return view('murid.pemrograman', compact('pem'));
}
public function desain(){
    $pem = Materi::all();
    return view('murid.desain', compact('pem'));
}
}
