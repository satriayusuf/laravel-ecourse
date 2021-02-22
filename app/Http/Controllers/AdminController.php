<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Riwayat;
use App\Laporan;
use App\Materi;
use App\Hasil;
use App\User;
use Auth;
class AdminController extends Controller
{
	 public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $materi = Materi::all()->count();
        $hasil = Hasil::all()->count();
        $akun = User::where('level', 'siswa')->count();
    	return view('admin.index', compact('materi', 'hasil', 'akun'));
    }

    public function materi(){
    	$mat = Materi::All();
    	return view('admin.materi.index', ['mat' => $mat]);
    }

    public function materitambah(){
    	return view('admin.materi.tambah');
    }

    public function aksimateri(Request $request){
    	$message =  [
    		'required' => 'Tidak Boleh Kosong!',
    		'min' => 'tidak boleh kurang!',
    		'max' => 'tidak boleh lebih!',
    	];

    	$this->validate($request, [
    		'nama' => 'required',
    		'video' => 'required',
    		'foto' => 'required',
    		'isi' => 'required',
    		'kategori' => 'required',
            'sertifikat' => 'required',
    	], $message);

    	if($request->foto)
        {
            $file = $request->file('foto');
            $acak  = $file->getClientOriginalExtension();
            $fileName = $file->getClientOriginalname(); 
            $request->file('foto')->move("img/", $fileName);
            $foto = $fileName;
        } else {
            $foto = NULL;
        }

    	Materi::Create([
    		'nama' => $request->get('nama'),
    		'video' => $request->get('video'),
    		'foto' => $foto,
    		'isi' => $request->get('isi'),
    		'kategori' => $request->get('kategori'),
            'sertifikat' => $request->get('sertifikat'),
    	]);
    	return redirect('/admin/materi');
    }

    public function editmateri($id)
    {
    	$mater = Materi::find($id);
    	return view('admin.materi.edit', ['mater' => $mater]);
    }

    public function updatemateri(Request $request, $id){

    	$message =  [
    		'required' => 'Tidak Boleh Kosong!',
    		'min' => 'tidak boleh kurang!',
    		'max' => 'tidak boleh lebih!',
    	];

    	$this->validate($request, [
    		'nama' => 'required',
    		'video' => 'required',
    		'foto' => 'required',
    		'isi' => 'required',
    		'kategori' => 'required',
            'sertifikat' => 'required',
    	], $message);

    	if($request->foto)
        {
            $file = $request->file('foto');
            $acak  = $file->getClientOriginalExtension();
            $fileName = $file->getClientOriginalname(); 
            $request->file('foto')->move("img/", $fileName);
            $foto = $fileName;
        } else {
            $foto = NULL;
        }

        Materi::find($id)->update([
        	'nama' => $request->get('nama'),
    		'video' => $request->get('video'),
    		'foto' => $foto,
    		'isi' => $request->get('isi'),
    		'kategori' => $request->get('kategori'),
            'sertifikat' => $request->get('sertifikat'),

        ]);

        return redirect('/admin/materi');

    }


    public function hapusmateri($id){
    	$materi = Materi::find($id);
    	$materi->delete();

    	return redirect('/admin/materi');
    }

    public function hapussemuahasil(){
        $hasil = Hasil::truncate();
        return redirect('/admin/hasil');
    }

    public function hasil(){
        $hasil = Hasil::all();
        return view('admin.hasil.index', ['hasil' => $hasil]);
    }

    public function aksihasil(Request $request, $id){
         Hasil::find($id)->update([
            'status' => $request->get('status'),
        ]);
         return redirect('/admin/hasil');
    }

    public function laporan(){
        $laporan = Laporan::all();
        return view('admin.laporan.index', compact('laporan'));
    }
    public function hapussemualaporan(){
        $laporan = Laporan::truncate();
        return redirect('/admin/laporan');
    }

    public function riwayat(){
        $riwayat = Riwayat::all();
        return view('admin.riwayat.index', compact('riwayat'));
    }
    public function hapussemuariwayat(){
        $riwayat = Riwayat::truncate();
        return redirect('/admin/riwayat');
    }
    public function pengaturan(){
        return view('admin.pengaturan');
    }
    public function pengaturanupdate(Request $request){
        Riwayat::Create([
            'namauser' => Auth::user()->name,
            'aksi' => 'Telah Mengubah Password',
        ]);

        User::find(Auth::user()->id)->update([
            'name' => Auth::user()->name,
            'email' => Auth::user()->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect('/admin/pengaturan');
    }

    public function pengaturanmurid(){
        $akun = User::where('level', 'siswa')->get();
        return view('admin.pengaturanmurid', compact('akun'));
    }

    public function pengaturanmuridupdate(Request $request, $id){
        Riwayat::Create([
            'namauser' => Auth::user()->name,
            'aksi' => 'Admin Telah Mengubah Password',
        ]);

        User::find($id)->update([
            'password' => Hash::make($request->password),
        ]);
        return redirect('/admin/pengaturan/murid');
    }
}
