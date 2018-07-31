<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Cell\DataValidation;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class FormController extends Controller
{
    public function make(Request $request)
    {

        switch ($request->jenis) {
            case 1:
                return $this->generateForm1($request->jumlah_data);
                break;
            case 2:
                return $this->generateForm2($request->jumlah_data);
                break;
            case 3:
                return $this->generateForm3($request->jumlah_data);
                break;
            case 5:
                return $this->generateForm5($request->jumlah_data);
                break;
            case 6:
                return $this->generateForm6($request->jumlah_data);
                break;
            case 8:
                return $this->generateForm8($request->jumlah_data);
                break;
            case 9:
                return $this->generateForm9($request->jumlah_data);
                break;
            default:
                break;
        }

        return redirect()->back();
    }

    public function generateForm1($n)
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $style = $sheet->getStyle('A1:C1')->getBorders()->getAllBorders()->setBorderStyle(Border::BORDER_THIN);

        $reader = IOFactory::createReader('Xlsx');
        $spreadsheet = $reader->load("form-template/".config('variables.FORM_TEMPLATE.1'));

        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue("C1", auth()->user()->satker->kode);
        $sheet->setCellValue("C2", auth()->user()->satker->nama);
        $sheet->setCellValue("C3", "BPJS Non-PBI");
        $sheet->setCellValue("C4", config('variables.KODE.KC'));
        $sheet->setCellValue("C5", config('variables.KODE.DATI2'));

        $sheet->getStyle('C1:C5')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_LEFT);

        $sheet->getColumnDimension('C')->setAutoSize(true);

        for ($i=0; $i < $n; $i++) {
            $sheet->setCellValue("A" . (9+$i), $i+1);
            $sheet->setCellValue("C" . (9+$i), 1);

            $validation = $spreadsheet->getActiveSheet()->getCell("B". (9+$i))
                ->getDataValidation();

            $validation->setType(DataValidation::TYPE_WHOLE);
            $validation->setAllowBlank(false);
            $validation->setShowInputMessage(true);
            $validation->setShowErrorMessage(true);
            $validation->setErrorTitle('Input error');

            $sheet->getStyle("A" . (9+$i) . ":" . "AJ" . (9+$i))->getBorders()->getAllBorders()->setBorderStyle(Border::BORDER_THIN);
        }

        $writer = IOFactory::createWriter($spreadsheet, "Xlsx");
        $file_name = "temporary/KODE 1 - IDENTITAS_1_" . sha1(time()) . ".xlsx";
        $writer->save($file_name);

        return response()->download($file_name)->deleteFileAfterSend();
    }

    public function generateForm2($n)
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $style = $sheet->getStyle('A1:C1')->getBorders()->getAllBorders()->setBorderStyle(Border::BORDER_THIN);

        $reader = IOFactory::createReader('Xlsx');
        $spreadsheet = $reader->load("form-template/".config('variables.FORM_TEMPLATE.2'));

        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue("C1", auth()->user()->satker->kode);
        $sheet->setCellValue("C2", auth()->user()->satker->nama);
        $sheet->setCellValue("C3", "BPJS Non-PBI");
        $sheet->setCellValue("C4", config('variables.KODE.KC'));
        $sheet->setCellValue("C5", config('variables.KODE.DATI2'));

        $sheet->getStyle('C1:C5')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_LEFT);

        $sheet->getColumnDimension('C')->setAutoSize(true);

        for ($i=0; $i < $n; $i++) {
            $sheet->setCellValue("A" . (9+$i), $i+1);
            $sheet->setCellValue("C" . (9+$i), 2);

            $validation = $spreadsheet->getActiveSheet()->getCell("B". (9+$i))
                ->getDataValidation();

            $validation->setType(DataValidation::TYPE_WHOLE);
            $validation->setAllowBlank(false);
            $validation->setShowInputMessage(true);
            $validation->setShowErrorMessage(true);
            $validation->setErrorTitle('Input error');

            $sheet->getStyle("A" . (9+$i) . ":" . "AJ" . (9+$i))->getBorders()->getAllBorders()->setBorderStyle(Border::BORDER_THIN);
        }

        $writer = IOFactory::createWriter($spreadsheet, "Xlsx");
        $file_name = "temporary/KODE 2 - ALAMAT_2_" . sha1(time()) . ".xlsx";
        $writer->save($file_name);

        return response()->download($file_name)->deleteFileAfterSend();
    }

    public function generateForm3($n)
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $style = $sheet->getStyle('A1:C1')->getBorders()->getAllBorders()->setBorderStyle(Border::BORDER_THIN);

        $reader = IOFactory::createReader('Xlsx');
        $spreadsheet = $reader->load("form-template/".config('variables.FORM_TEMPLATE.3'));

        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue("C1", auth()->user()->satker->kode);
        $sheet->setCellValue("C2", auth()->user()->satker->nama);
        $sheet->setCellValue("C3", "BPJS Non-PBI");
        $sheet->setCellValue("C4", config('variables.KODE.KC'));
        $sheet->setCellValue("C5", config('variables.KODE.DATI2'));

        $sheet->getStyle('C1:C5')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_LEFT);

        $sheet->getColumnDimension('C')->setAutoSize(true);

        for ($i=0; $i < $n; $i++) {
            $sheet->setCellValue("A" . (9+$i), $i+1);
            $sheet->setCellValue("C" . (9+$i), 3);

            $validation = $spreadsheet->getActiveSheet()->getCell("B". (9+$i))
                ->getDataValidation();

            $validation->setType(DataValidation::TYPE_WHOLE);
            $validation->setAllowBlank(false);
            $validation->setShowInputMessage(true);
            $validation->setShowErrorMessage(true);
            $validation->setErrorTitle('Input error');

            $sheet->getStyle("A" . (9+$i) . ":" . "AJ" . (9+$i))->getBorders()->getAllBorders()->setBorderStyle(Border::BORDER_THIN);
        }

        $writer = IOFactory::createWriter($spreadsheet, "Xlsx");
        $file_name = "temporary/KODE 3 - GAJI_3_" . sha1(time()) . ".xlsx";
        $writer->save($file_name);

        return response()->download($file_name)->deleteFileAfterSend();
    }

    public function generateForm5($n)
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $style = $sheet->getStyle('A1:C1')->getBorders()->getAllBorders()->setBorderStyle(Border::BORDER_THIN);

        $reader = IOFactory::createReader('Xlsx');
        $spreadsheet = $reader->load("form-template/".config('variables.FORM_TEMPLATE.5'));

        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue("C1", auth()->user()->satker->kode);
        $sheet->setCellValue("C2", auth()->user()->satker->nama);
        $sheet->setCellValue("C3", "BPJS Non-PBI");
        $sheet->setCellValue("C4", config('variables.KODE.KC'));
        $sheet->setCellValue("C5", config('variables.KODE.DATI2'));

        $sheet->getStyle('C1:C5')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_LEFT);

        $sheet->getColumnDimension('C')->setAutoSize(true);

        for ($i=0; $i < $n; $i++) {
            $sheet->setCellValue("A" . (9+$i), $i+1);
            $sheet->setCellValue("C" . (9+$i), 5);

            $validation = $spreadsheet->getActiveSheet()->getCell("B". (9+$i))
                ->getDataValidation();

            $validation->setType(DataValidation::TYPE_WHOLE);
            $validation->setAllowBlank(false);
            $validation->setShowInputMessage(true);
            $validation->setShowErrorMessage(true);
            $validation->setErrorTitle('Input error');

            $sheet->getStyle("A" . (9+$i) . ":" . "AJ" . (9+$i))->getBorders()->getAllBorders()->setBorderStyle(Border::BORDER_THIN);
        }

        $writer = IOFactory::createWriter($spreadsheet, "Xlsx");
        $file_name = "temporary/KODE 5 - NONAKTIF_AKHIR_BULAN_5_" . sha1(time()) . ".xlsx";
        $writer->save($file_name);

        return response()->download($file_name)->deleteFileAfterSend();
    }

    public function generateForm6($n)
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $style = $sheet->getStyle('A1:C1')->getBorders()->getAllBorders()->setBorderStyle(Border::BORDER_THIN);

        $reader = IOFactory::createReader('Xlsx');
        $spreadsheet = $reader->load("form-template/".config('variables.FORM_TEMPLATE.6'));

        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue("C1", auth()->user()->satker->kode);
        $sheet->setCellValue("C2", auth()->user()->satker->nama);
        $sheet->setCellValue("C3", "BPJS Non-PBI");
        $sheet->setCellValue("C4", config('variables.KODE.KC'));
        $sheet->setCellValue("C5", config('variables.KODE.DATI2'));

        $sheet->getStyle('C1:C5')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_LEFT);

        $sheet->getColumnDimension('C')->setAutoSize(true);

        for ($i=0; $i < $n; $i++) {
            $sheet->setCellValue("A" . (9+$i), $i+1);
            $sheet->setCellValue("C" . (9+$i), 6);

            $validation = $spreadsheet->getActiveSheet()->getCell("B". (9+$i))
                ->getDataValidation();

            $validation->setType(DataValidation::TYPE_WHOLE);
            $validation->setAllowBlank(false);
            $validation->setShowInputMessage(true);
            $validation->setShowErrorMessage(true);
            $validation->setErrorTitle('Input error');

            $sheet->getStyle("A" . (9+$i) . ":" . "AJ" . (9+$i))->getBorders()->getAllBorders()->setBorderStyle(Border::BORDER_THIN);
        }

        $writer = IOFactory::createWriter($spreadsheet, "Xlsx");
        $file_name = "temporary/KODE 6 - NONAKTIF_MENINGGAL_6_" . sha1(time()) . ".xlsx";
        $writer->save($file_name);

        return response()->download($file_name)->deleteFileAfterSend();
    }

    public function generateForm8($n)
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $style = $sheet->getStyle('A1:C1')->getBorders()->getAllBorders()->setBorderStyle(Border::BORDER_THIN);

        $reader = IOFactory::createReader('Xlsx');
        $spreadsheet = $reader->load("form-template/".config('variables.FORM_TEMPLATE.8'));

        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue("C1", auth()->user()->satker->kode);
        $sheet->setCellValue("C2", auth()->user()->satker->nama);
        $sheet->setCellValue("C3", "BPJS Non-PBI");
        $sheet->setCellValue("C4", config('variables.KODE.KC'));
        $sheet->setCellValue("C5", config('variables.KODE.DATI2'));

        $sheet->getStyle('C1:C5')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_LEFT);

        $sheet->getColumnDimension('C')->setAutoSize(true);

        for ($i=0; $i < $n; $i++) {
            $sheet->setCellValue("A" . (9+$i), $i+1);
            $sheet->setCellValue("C" . (9+$i), 8);

            $validation = $spreadsheet->getActiveSheet()->getCell("B". (9+$i))
                ->getDataValidation();

            $validation->setType(DataValidation::TYPE_WHOLE);
            $validation->setAllowBlank(false);
            $validation->setShowInputMessage(true);
            $validation->setShowErrorMessage(true);
            $validation->setErrorTitle('Input error');

            $sheet->getStyle("A" . (9+$i) . ":" . "AJ" . (9+$i))->getBorders()->getAllBorders()->setBorderStyle(Border::BORDER_THIN);
        }

        $writer = IOFactory::createWriter($spreadsheet, "Xlsx");
        $file_name = "temporary/KODE 8 - PINDAH_SATKER_8_" . sha1(time()) . ".xlsx";
        $writer->save($file_name);

        return response()->download($file_name)->deleteFileAfterSend();
    }

    public function generateForm9($n)
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $style = $sheet->getStyle('A1:C1')->getBorders()->getAllBorders()->setBorderStyle(Border::BORDER_THIN);

        $reader = IOFactory::createReader('Xlsx');
        $spreadsheet = $reader->load("form-template/".config('variables.FORM_TEMPLATE.9'));

        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue("C1", auth()->user()->satker->kode);
        $sheet->setCellValue("C2", auth()->user()->satker->nama);
        $sheet->setCellValue("C3", "BPJS Non-PBI");
        $sheet->setCellValue("C4", config('variables.KODE.KC'));
        $sheet->setCellValue("C5", config('variables.KODE.DATI2'));

        $sheet->getStyle('C1:C5')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_LEFT);

        $sheet->getColumnDimension('C')->setAutoSize(true);

        for ($i=0; $i < $n; $i++) {
            $sheet->setCellValue("A" . (9+$i), $i+1);
            $sheet->setCellValue("C" . (9+$i), 9);

            $validation = $spreadsheet->getActiveSheet()->getCell("B". (9+$i))
                ->getDataValidation();

            $validation->setType(DataValidation::TYPE_WHOLE);
            $validation->setAllowBlank(false);
            $validation->setShowInputMessage(true);
            $validation->setShowErrorMessage(true);
            $validation->setErrorTitle('Input error');

            $sheet->getStyle("A" . (9+$i) . ":" . "AJ" . (9+$i))->getBorders()->getAllBorders()->setBorderStyle(Border::BORDER_THIN);
        }

        $writer = IOFactory::createWriter($spreadsheet, "Xlsx");
        $file_name = "temporary/KODE 9 - NIP_9_" . sha1(time()) . ".xlsx";
        $writer->save($file_name);

        return response()->download($file_name)->deleteFileAfterSend();
    }

    public function makeNew()
    {

    }
}
