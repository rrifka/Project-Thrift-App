<?php

namespace App\Http\Controllers;

use App\Models\Data_Pakaian;
use App\Models\Data_Pembelian;
use App\Models\Data_User;
use App\Models\Detail_Pembelian;
use App\Models\Kategori_Pakaian;
use App\Models\Metode_Pembayaran;
use App\Models\Review_Pakaian;
use Illuminate\Http\Request;

class Pages_Controller extends Controller
{
    public function loginPage () {
        return view('public.login');
    }
    public function registerPage () {
        return view('public.register');
    }
    public function dashboardPage () {
        return view('web.view.dashboard');
    }
    public function kategori_pakaianPage () {
        $data = Kategori_Pakaian::readKategori_PakaianAll();
        return view('web.view.kategori_pakaian', ['kategori_pakaian' => $data]);
    }
    public function data_pakaianPage () {
        $data = Data_Pakaian::readData_PakaianAll();
        return view('web.view.data_pakaian', ['data_pakaian' => $data]);
    }
    public function review_pakaianPage () {
        $data = Review_Pakaian::readReview_PakaianAll();
        return view('web.view.review_pakaian', ['review_pakaian' => $data]);
    }
    public function data_userPage () {
        $data = Data_User::readData_UserAll();
        return view('web.view.data_user', ['data_user' => $data]);
    }
    public function metode_pembayaranPage () {
        $data = Metode_Pembayaran::readMetode_PembayaranAll();
        return view('web.view.metode_pembayaran', ['metode_pembayaran' => $data]);
    }
    public function data_pembelianPage () {
        $data = Data_Pembelian::readData_PembelianAll();
        return view('web.view.data_pembelian', ['data_pembelian' => $data]);
    }
    public function detail_pembelianPage () {
        $data = Detail_Pembelian::readDetail_PembelianAll();
        return view('web.view.detail_pembelian', ['detail_pembelian' => $data]);
    }
}