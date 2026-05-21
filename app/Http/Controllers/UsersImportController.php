<?php

namespace App\Http\Controllers;
use App\imports\UsersImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UsersImportController extends Controller
{
    public function show () {
        return view('users.import');
    }

    public function store (Request $request) {
        $file = $request->file('file')->store('import');

        (new UsersImport)->import($file);

        return back()->withStatus('Excel file imported!');
    }
}
