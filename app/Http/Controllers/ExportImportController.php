<?php

namespace App\Http\Controllers;

use App\Exports\StudentsExport;
use App\Imports\StudentsImport;
use App\Models\Student;
use Illuminate\Http\Request;
use PDF;
use Maatwebsite\Excel\Facades\Excel;

class ExportImportController extends Controller
{
    public function cetak_pdf()
    {
        $student = Student::all();
        // $dataPertama = $ss
        $pdf = PDF::loadview('student.PDF', ['students' => $student]);
        return $pdf->download('student-data.pdf');
    }

    public function export_excel()
    {
        return Excel::download(new StudentsExport, 'student.xlsx');
    }

    public function import_excel(Request $request)
    {
        // validasi
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        $file = $request->file('file');
        Excel::import(new StudentsImport, $file);
        return redirect()->back()->with('success', 'Data Succesfully imported!');
    }
}
