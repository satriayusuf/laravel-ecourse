<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','PdfController@welcome');

Auth::routes();

// siswa

Route::get('/home', 'HomeController@index')->name('home')->middleware('Siswa');
Route::post('/home/aksi/{id}', 'HomeController@hasil')->name('hasilmateri')->middleware('Siswa');
Route::get('/materi/{id}', 'HomeController@materi')->name('materi')->middleware('Siswa');
Route::get('/hasil', 'HomeController@indexhasil')->name('indexhasil')->middleware('Siswa');
Route::get('/deletehasil/{id}', 'HomeController@deletehasil')->name('deletehasil')->middleware('Siswa');
Route::get('/test', 'HomeController@test')->name('test')->middleware('Siswa');
Route::get('/pengaturan', 'HomeController@pengaturan')->name('pengaturan')->middleware('Siswa');
Route::post('/pengaturan/update', 'HomeController@pengaturanupdate')->name('pengaturanupdate')->middleware('Siswa');
Route::post('/pengaturan/update/password', 'HomeController@pengaturanpassword')->name('pengaturanpassword')->middleware('Siswa');
Route::get('/pemograman', 'HomeController@pemograman')->name('pemograman')->middleware('Siswa');
Route::get('/desain', 'HomeController@desain')->name('desain')->middleware('Siswa');

// pdf
Route::get('/pdf/{id}', 'PdfController@print')->name('print');
// admin

Route::get('/admin', 'AdminController@index')->name('admin')->middleware('Admin');
Route::get('/admin/materi', 'AdminController@materi')->name('admin.materi')->middleware('Admin');
Route::get('/admin/materi/tambah', 'AdminController@materitambah')->name('admin.materitambah')->middleware('Admin');
Route::post('/admin/materi/aksi', 'AdminController@aksimateri')->name('aksimateri')->middleware('Admin');
Route::get('/admin/materi/hapus/{id}', 'AdminController@hapusmateri')->name('hapusmateri')->middleware('Admin');
Route::get('/admin/materi/edit/{id}', 'AdminController@editmateri')->name('editmateri')->middleware('Admin');
Route::put('/admin/materi/update/{id}', 'AdminController@updatemateri')->name('updatemateri')->middleware('Admin');
Route::get('/admin/hasil', 'AdminController@hasil')->name('hasil')->middleware('Admin');
Route::put('/admin/hasil/aksi/{id}', 'AdminController@aksihasil')->name('aksihasil')->middleware('Admin');
Route::get('/admin/hasil/hapus', 'AdminController@hapussemuahasil')->name('hapussemuahasil')->middleware('Admin');
Route::get('/admin/laporan', 'AdminController@laporan')->name('laporan')->middleware('Admin');
Route::get('/admin/laporan/hapus', 'AdminController@hapussemualaporan')->name('hapussemualaporan')->middleware('Admin');
Route::get('/admin/riwayat', 'AdminController@riwayat')->name('riwayat')->middleware('Admin');
Route::get('/admin/riwayat/hapus', 'AdminController@hapussemuariwayat')->name('hapussemuariwayat')->middleware('Admin');
Route::get('/admin/pengaturan', 'AdminController@pengaturan')->name('pengaturanadmin')->middleware('Admin');
Route::post('/admin/pengaturan/update', 'AdminController@pengaturanupdate')->name('pengaturanpwadmin')->middleware('Admin');
Route::get('/admin/pengaturan/murid', 'AdminController@pengaturanmurid')->name('pengaturanmurid')->middleware('Admin');
Route::post('/admin/update/pengaturanmurid/{id}', 'AdminController@pengaturanmuridupdate')->name('pengaturanmuridupdate')->middleware('Admin');

