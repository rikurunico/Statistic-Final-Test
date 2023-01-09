<?php

namespace App\Http\Controllers;

use App\Exports\StudentsExport;
use App\Imports\StudentsImport;
use App\Jobs\ExportPDF;
use App\Models\Student;
use Illuminate\Http\Request;
use PDF;
use Maatwebsite\Excel\Facades\Excel;

class ExportImportController extends Controller
{
    public function cetak_pdf()
    {
        $job = new ExportPDF();
        dispatch($job);
        //Download File From public/pdf/students.pdf
        return response()->download(storage_path('app/public/pdf/students.pdf'));
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
