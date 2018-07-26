<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Cell\DataValidation;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class MutationFormController extends Controller
{
    public function make()
    {
        /*$spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $style = $sheet->getStyle('A1:C1')->getBorders()->getAllBorders()->setBorderStyle(Border::BORDER_THIN);

        $writer = new Xlsx($spreadsheet);
        $writer->save('hello.xlsx');*/

        $reader = IOFactory::createReader('Xlsx');
        $spreadsheet = $reader->load("form-template/kode1.xlsx");

        $sheet = $spreadsheet->getActiveSheet();

        for ($i=0; $i <= 2; $i++) {
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
        $writer->save("temporary/" . sha1(time()) . ".xlsx");
    }
}
