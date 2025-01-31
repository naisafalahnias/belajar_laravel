<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\SiswasController;
use App\Http\Controllers\PpdbsController;
use App\Http\Controllers\PenggunasController;
use App\Http\Controllers\TeleponsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\KategorisController;
use App\Http\Controllers\ProduksController;
use App\Http\Controllers\PenerbitsController;
use App\Http\Controllers\GenresController;
use App\Http\Controllers\BukusController;
use App\Http\Controllers\PembelisController;
use App\Http\Controllers\TransaksisController;



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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    return 'Selamat Datang di Halaman HOME';
});

Route::get('/about', function(){
    return 'Selamat Datang di Halaman ABOUT';
});

route::get('/contact', function(){
    return 'Selamat Datang di Halaman CONTACT';
});
// route parameter
route::get('/tes/{nama2}/{tmptlhir}/{jk2}/{agama2}/{alamat2}', function($nama,$tmptlhr,$jk,$agama,$alamat){
    return 'Nama : '.$nama.'<br>'.
           'Tempat Lahir : '.$tmptlhr.'<br>'.
           'Jenis Kelamin : '.$jk.'<br>'.
           'Agama : '.$agama.'<br>'.
           'Alamat : '.$alamat;
});

route::get('/hitung/{angka1}/{angka2}', function($bilangan1,$bilangan2){
    return 'Bilangan 1 : '.$bilangan1.'<br>'.
           'Bilangan 2 : '.$bilangan2.'<br>'.
           'Hasil : '.$bilangan1+$bilangan2;
});

//TUGAS LATIHAN ROUTE
route::get('/latihan/{pembeli}/{telp}/{jns}/{namabrng}/{jumlah}/{pembayaran}', function($nama,$telp1,$jns,$nmbrng,$jumlah,$pembayaran){
    $harga= 0;
    $casback= 0;
    $potongan= 0;

    if ($jns == "Handphone") {
        if ($nmbrng == "Poco") {
            $harga = 3000000;
        } elseif ($nmbrng == "Samsung") {
            $harga = 5000000;
        } elseif ($nmbrng == "Iphone") {
            $harga = 15000000;
        } else {
            return "Barang tidak tersedia<br>";
        }
    } elseif ($jns == "Laptop") {
        if ($nmbrng == "Lenovo") {
            $harga = 4000000;
        } elseif ($nmbrng == "Acer") {
            $harga = 8000000;
        } elseif ($nmbrng == "Macbook") {
            $harga = 20000000;
        } else {
            return "Barang tidak tersedia<br>";
        }
    } elseif ($jns == "TV") {
        if ($nmbrng == "Tohshiba") {
            $harga = 5000000;
        } elseif ($nmbrng == "Samsung") {
            $harga = 8000000;
        } elseif ($nmbrng == "LG") {
            $harga = 10000000;
        } else {
            return "Barang tidak tersedia<br>";
        }
    } else {
        return "Jenis tidak tersedia<br>";
    }

    $total = $harga * $jumlah;

    if($total > 10000000){
        $casback = 500000;
    } else {
        $casback = 0;
    }

    if($pembayaran == "transfer"){
        $potongan = 50000;
    } else {
        $potongan = 0;
    }

    $totalPembayaran = $total-$casback-$potongan;

    return '------------------------------------<br>'.
           'Nama : '.$nama.'<br>'.
           'Telepon : '.$telp1.'<br>'.
           'Jenis Barang : '.$jns.'<br>'.
           'Nama Barang : '.$nmbrng.'<br>'.
           'Harga : Rp. '.number_format($harga, 0, ',', '.').'<br>'.
           'Jumlah : '.$jumlah.'<br>'.
           'Total : Rp. '.number_format($total, 0, ',', '.').'<br>'. 
           'Casback : Rp. '.number_format($casback, 0, ',', '.').'<br>'.
           'Potongan : Rp. '.number_format($potongan, 0,',','.').'<br>'.
           'Total Pembayaran : Rp. '.number_format($totalPembayaran, 0,',','.');
});

route::get('/siswa', function(){

    $data_siswa = ['keyndra','napis','nabila','daffa','opet','agus'];

    return view('tampil',compact('data_siswa'));
});


//routing dengan model
route::get('/post', [PostsController::class, 'menampilkan']);
route::get('/barang', [PostsController::class, 'menampilkan2']);

// route barang
// route::get('/barang', function(){

//     // $post = post::where('title','LIKE','%roblox%')->get();
//     // $post = post::where('id',2)->get();
//     $barang = barang::all();
//     return view('tampil_barang',compact('barang'));
// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// CRUD
route::resource('siswa', SiswasController::class);

// tgs
route::resource('ppdb', PpdbsController::class);

// tgs bikin crud one to one
route::resource('pengguna', PenggunasController::class);
route::resource('telepon', TeleponsController::class);

// tgs Many to Many
route::resource('product', ProductsController::class);
route::resource('customer', CustomersController::class);
route::resource('order', OrdersController::class);

//tgs one to many
route::resource('kategori', KategorisController::class);
route::resource('produk', ProduksController::class);

//tgs campuran inimh
route::resource('penerbit', PenerbitsController::class);
route::resource('genre', GenresController::class);
route::resource('buku', BukusController::class);
route::resource('pembeli', PembelisController::class);
route::resource('transaksi', TransaksisController::class);

