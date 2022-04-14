<?php

namespace App\Controllers;

use App\Models\InputModel;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Hasil extends BaseController
{

    public function __construct()
    {

        $this->inputModel = new InputModel();
        $this->spreadsheet = new Spreadsheet();
        $this->writer = new Xlsx($this->spreadsheet);
        $this->reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        $this->reader->setReadDataOnly(true);
        helper('form');
        $this->validation = \Config\Services::validation();
    }

    public function index()
    {
        $data = [
            'title' => 'Hasil',
            'nilaiY' => '',
            'hasilkonstanta' => '',
            'hasilkoeff' => '',
            'pearson' => '',
            'kd' => '',
            'klasifikasi' => '',
            'hubungan' => '',
            'kesimpulanPearson' => '',
            'kesimpulanDeterminasi' => '',
        ];
        return view('/hasil', $data);
    }
    public function cekhasil()
    {
        $sum = $this->inputModel->sumsum();
        //konstanta
        $ataskirikons = $sum[0]->nilaiY * $sum[0]->nilaiXkuadrat;
        $ataskanankons = $sum[0]->nilaiX * $sum[0]->nilaiXY;
        $selisihataskons = $ataskirikons - $ataskanankons;
        $bawahkirikons = $sum[0]->nilaiXkuadrat * $sum[0]->jumlah;
        $bawahkanankons = $sum[0]->nilaiX * $sum[0]->nilaiX;
        $selisihbawahkons = $bawahkirikons - $bawahkanankons;
        // nilai a
        $hasilkonstanta = $selisihataskons / $selisihbawahkons;
        //koefisien
        $ataskirikoef = $sum[0]->nilaiXY * $sum[0]->jumlah;
        $ataskanankoef = $sum[0]->nilaiY * $sum[0]->nilaiX;
        $selisihataskoef = $ataskirikoef - $ataskanankoef;
        $bawahkirikoef = $sum[0]->nilaiX * $sum[0]->jumlah;
        $bawahkanankoef = $sum[0]->nilaiX * $sum[0]->nilaiX;
        $selisihbawahkoef = $bawahkirikoef - $bawahkanankoef;
        // nilai b
        $hasilkoeff = $selisihataskoef / $selisihbawahkoef;
        //Y=a+bX
        $nilaiY = "Y= $hasilkonstanta + ( $hasilkoeff) X ";

        //cari nilai pearson
        $atas1 = $sum[0]->jumlah * $sum[0]->nilaiXY;
        $atas2 = $sum[0]->nilaiY * $sum[0]->nilaiX;
        $hasilatas = $atas1 - $atas2;
        $bawah1 = ($sum[0]->jumlah * $sum[0]->nilaiXkuadrat) - ($sum[0]->nilaiX * $sum[0]->nilaiX);
        $bawah2 = ($sum[0]->jumlah * $sum[0]->nilaiYkuadrat) - ($sum[0]->nilaiY * $sum[0]->nilaiY);
        $hasilbawah = sqrt($bawah1 * $bawah2);

        $pearson = $hasilatas / $hasilbawah;
        $kd = $pearson * 100;
        if ($pearson >= 0 && $pearson < 0.2) {
            $klasifikasi = "Sangat Lemah";
        } else if ($pearson >= 0.2 && $pearson < 0.4) {
            $klasifikasi = "Lemah";
        } else if ($pearson >= 0.4 && $pearson < 0.6) {
            $klasifikasi = "Sedang";
        } else if ($pearson >= 0.6 && $pearson < 0.8) {
            $klasifikasi = "Kuat";
        } else if ($pearson >= 0.8 && $pearson <= 1) {
            $klasifikasi = "Sangat Kuat";
        }

        if ($pearson < 0) {
            $hubungan = "Negatif yang berarti hubungan yang terbalik";
        } else {
            $hubungan = "Positif yang berarti hubungan yang lurus/linear";
        }

        //dd($ataskanankoef);
        $data = [
            'title' => 'Hasil',
            'sum' => $sum,
            'nilaiY' => $nilaiY,
            'hasilkonstanta' => $hasilkonstanta,
            'hasilkoeff' => $hasilkoeff,
            'pearson' => $pearson,
            'kd' => $kd . "%",
            'klasifikasi' => $klasifikasi,
            'hubungan' => $hubungan,
            'kesimpulanPearson' => "Arah hubungan dari pearson adalah $hubungan dengan besar hubungan $pearson yaitu kekuatan hubungan $klasifikasi",
            'kesimpulanDeterminasi' => "Besar kontribusi variabel Curah Hujan pada menjelaskan sebesar $kd% dari perubahan yang ada di variabel Produksi Padi, sisanya sebesar " . (100 - $kd) . "% dijelaskan oleh variabel selain Curah Hujan.",

        ];
        //d($data);
        //passing data to view
        return view('/hasil', $data);
    }
    public function ramalan()
    {
        $data = [
            'title' => 'Ramalan',
            'nilaiRamalan' => '',
        ];
        return view('/ramalan', $data);
    }


    public function hasilramalan()
    {
        $sum = $this->inputModel->sumsum();
        //konstanta
        $ataskirikons = $sum[0]->nilaiY * $sum[0]->nilaiXkuadrat;
        $ataskanankons = $sum[0]->nilaiX * $sum[0]->nilaiXY;
        $selisihataskons = $ataskirikons - $ataskanankons;
        $bawahkirikons = $sum[0]->nilaiXkuadrat * $sum[0]->jumlah;
        $bawahkanankons = $sum[0]->nilaiX * $sum[0]->nilaiX;
        $selisihbawahkons = $bawahkirikons - $bawahkanankons;
        // nilai a
        $hasilkonstanta = $selisihataskons / $selisihbawahkons;
        //koefisien
        $ataskirikoef = $sum[0]->nilaiXY * $sum[0]->jumlah;
        $ataskanankoef = $sum[0]->nilaiY * $sum[0]->nilaiX;
        $selisihataskoef = $ataskirikoef - $ataskanankoef;
        $bawahkirikoef = $sum[0]->nilaiX * $sum[0]->jumlah;
        $bawahkanankoef = $sum[0]->nilaiX * $sum[0]->nilaiX;
        $selisihbawahkoef = $bawahkirikoef - $bawahkanankoef;
        // nilai b
        $hasilkoeff = $selisihataskoef / $selisihbawahkoef;
        $curahhujan = $this->request->getPost('curahhujan');
        $data = [
            'title' => 'Ramalan',
            'nilaiRamalan' => $hasilkonstanta + ($hasilkoeff * $curahhujan),
        ];
        return view('/ramalan', $data);
    }
}
