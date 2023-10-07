<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use App\Models\Sector;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function getAllEmployees(){
        $employees = Employees::all();

        return view('employees.index')->with('employees',$employees);
    }
    public function getEmployeesDetail($employee_id){
        $news = Employees::where('id',$employee_id)->first();
        $authors = Sector::select('id','name')->orderby('name')->get();
        return view('employees.edit')->with('employees',$news)->with('sectors',$authors);
    }

    public function edit(Request $request) {
        $name = $request->input('name');
        $email = $request->input('email');
        $sector_id = $request->input('sector');
        $id = $request->input('employees_id');
        $employees = Employees::where('id',$id)->first();
        $employees->name = $name;
        $employees->sector_id = $sector_id;
        $employees->email = $email;
        $employees->save();
        return redirect()->back()->with('success','Başarıyla update edildi');
}
    public function add(){
        $sectors = Sector::select('id','name')->orderby('name')->get();
        return view('employees.add')->with('sectors',$sectors);
    }
    public function save(Request $request){
        $name = $request->input('name');
        $sector_id = $request->sector;
        $email = $request->input('email');
        $employees = new Employees();
        $employees->name = $name;
        $employees->email = $email;
        $employees->sector_id = $sector_id;
        $employees->save();
        return redirect()->back()->with('success','Başarıyla kayıt edildi edildi');
    }
    public function delete($employees_id){
        $news = Employees::where('id',$employees_id)->first()->delete();
        return redirect()->route('employees.all');
    }
}
