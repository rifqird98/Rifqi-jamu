<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JamuController extends Controller
{
    public function index()
    {
        # code...
        return view('jamu');
    }
    public function store(Request $request)
    {

        $kluh = explode(',',$request->keluhan);
        $kl = implode(',',$kluh);
        $cetak = new saran($kl, $request->tahunlahir);
        $data = [
            'jamu' => $cetak->keluhan(),
            'khasiat' => 'meningkatkan imun tubuh',
            'umur' => $cetak->umur(),
            'saran' => $cetak->saran()
        ];

        return view('jamu', compact('data'));
    }
}


class jamu
{
    public function __construct($keluhan, $umur)
    {
        $this->keluhan_ = $keluhan;
        $this->umur_ = $umur;
    }

    public function keluhan()
    {
        if ($this->keluhan_ == 'keseleo, kurang nafsu makan') {
            return 'beras kencur';
        } elseif ($this->keluhan_ == 'pegel-pegel') {
            return 'kunyit asam';
        } elseif ($this->keluhan_ == 'darah tinggi, gula darah') {
            return 'brotowali';
        } elseif ($this->keluhan_ == 'kram perut, masuk angin') {
            return 'temu lawak';
        }else{
            return 'kata yang dimasukkan tidak tepat';
        }
    }
    public function umur()
    {
        return date('y')-$this->umur_;
    }
}

class saran extends jamu
{

    public function saran()
    {

        $thn_L = $this->umur();
        $jamu = $this->keluhan();
        $keluh = $this->keluhan_;
        
                if ($thn_L <= 10 ) {
                    $konsum = 'Dikonsumsi 1x';
                } else {
                    $konsum = 'Dinkonsumi 2x';
                }

        if ($jamu == 'beras kencur' && $keluh == "keseleo") {
            return 'dioleskan';
        
        }else {
            return $konsum;
        }
    }
}


