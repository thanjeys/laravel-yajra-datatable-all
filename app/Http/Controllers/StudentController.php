<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;
use DataTables;
class StudentController extends Controller
{
    public function index()
    {
        return view('students');
    }

    public function getStudents(Request $request)
    {
        if (request()->ajax()) {
            $data = Student::latest()->get();

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row) {
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function basicTable()
    {
        $students = Student::latest()->get();
        return view('basic-table', compact('students'));
    }

    public function basicDataTable()
    {
        $students = Student::latest()->get();
        return view('basic-datatable', compact('students'));
    }
}

