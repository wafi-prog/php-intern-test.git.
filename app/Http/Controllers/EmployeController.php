<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
     public function index(){
        $employe = Employe::all();
        return view('employee.baseemploye',compact('employe'));
    }

     public function createemploye(Request $request){
        $request->validate([
          'photo_upload_path' => 'required|',
      ]);
      
      $photo_upload_path = $request->file('photo_upload_path');
      $namafile = time() . '.' . $photo_upload_path->getClientOriginalExtension();
      
      
      $photo_upload_path->storeAs('Pasific', $namafile, 'public');
       Employe::create([
            'nama' => $request->nama,
            'nomor' => $request->nomor,
            'jabatan' => $request->jabatan,
            'talahir' => $request->talahir,
            'photo_upload_path' => $namafile
            
        ]);
        return redirect()->back()->with('Create',"Berhasil menambah data");
    }
}
