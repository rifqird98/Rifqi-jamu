<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Produk;
use Illuminate\Http\Request;

class DashboardControlller extends Controller
{
    public function index()
    {
        # code...
        $data = Post::all();
        return view('welcome', compact('data'));
    }

    public function detail(Request $request, $id)
    {
        # code..
        $data = Post::findOrFail($id);
        $produk = Produk::all();
        return view('detail', compact('data','produk'));
    }
}
