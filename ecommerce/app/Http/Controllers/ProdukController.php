<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    //
    public function index()
    {
        $eloquent = Produk::get();
        $queryBuilder = DB::table('produk')->get();
        dd($queryBuilder);
        return view('produk.detail');
    }
}
