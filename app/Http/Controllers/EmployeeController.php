<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;
use App\Entities\Employee;
use App\Entities\EmployeeSection;
use App\Entities\Company;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lists = Employee::all();
        return View('employee.index', compact('lists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Company::all();
        $sections = EmployeeSection::all();
        return View('employee.add', compact('companies', 'sections'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Employee $emp)
    {
        $validator = Validator::make($request->all(), [
            'nik' => 'required',
            'name' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'section' => 'required',
            'company' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('employee.add')
                        ->withErrors($validator)
                        ->withInput();
        }

        $emp->nik = $request->input('nik');
        $emp->name = $request->input('name');
        $emp->age = $request->input('age');
        $emp->gender = $request->input('gender');
        $emp->section = $request->input('section');
        $emp->company = $request->input('company');
        $emp->save();

        return redirect()->route('employee.index')->withNotice('Sukses Menambahkan Data Peserta MCU');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Employee $emp)
    {
        $employee = $emp->find($id);
        $companies = Company::all();
        $sections = EmployeeSection::all();
        return View('employee.edit', compact('employee','sections','companies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, Employee $emp)
    {
        $validator = Validator::make($request->all(), [
            // 'nik' => 'required',
            'name' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'section' => 'required',
            'company' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('employee.edit', ['id' => $id])
                        ->withErrors($validator)
                        ->withInput();
        }
        
        $employee = $emp->find($id);
        // $employee->nik = $request->input('nik');
        $employee->name = $request->input('name');
        $employee->age = $request->input('age');
        $employee->gender = $request->input('gender');
        $employee->section = $request->input('section');
        $employee->company = $request->input('company');
        $employee->update();

        return redirect()->route('employee.index')->withNotice('Sukses Memperbaharui Data Peserta MCU');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
