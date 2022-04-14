<?php

namespace App\Controllers;

use App\Models\InputModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Input extends BaseController
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
        $list = $this->inputModel->datainput();
        $data = [
            'title' => 'Input Data',
            'list' => $list
        ];
        //d($data);
        return view('/input', $data);
    }
    public function input()
    {
        $nilaiX = $this->request->getPost('x');
        $nilaiY = $this->request->getPost('y');
        $data = [
            'nilaiX' => $nilaiX,
            'nilaiY' => $nilaiY,
            'nilaiXkuadrat' => $nilaiX * $nilaiX,
            'nilaiYkuadrat' => $nilaiY * $nilaiY,
            'nilaiXY' => $nilaiX * $nilaiY
        ];
        $this->inputModel->add($data);
        session()->setFlashdata('success', 'Data berhasil ditambahkan');
        return redirect()->to('/input');
    }

    public function importexcel()
    {

        $file = $this->request->getFile('file_excel');
        $ext = $file->getClientExtension();

        if ($ext == 'xls') {
            $render = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
        } else {
            $render = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        }


        $spreadsheet = $render->load($file);
        $sheetData = $spreadsheet->getActiveSheet()->toArray();
        //date format phpspreadsheet

        foreach ($sheetData as $s => $excel) {
            //skip title row
            if ($s == 0) {
                continue;
            }
            $nilaix = $excel[1];
            $nilaiy = $excel[2];
            $data = [
                'nilaiX' => $nilaix,
                'nilaiY' => $nilaiy,
                'nilaiXkuadrat' => $nilaix * $nilaix,
                'nilaiYkuadrat' => $nilaiy * $nilaiy,
                'nilaiXY' => $nilaix * $nilaiy
            ];
            //d($data);
            $this->inputModel->insertexceldata($data);
        }
        //dd($sheetData);
        session()->setFlashdata('pesan', 'Data berhasil di import');
        return redirect()->to('/input');
    }
    public function grafik()
    {
        $list = $this->inputModel->datainput();
        $data = [
            'title' => 'Input Data',
            'list' => $list
        ];
        //d($data);
        return view('/grafik', $data);
    }
}
