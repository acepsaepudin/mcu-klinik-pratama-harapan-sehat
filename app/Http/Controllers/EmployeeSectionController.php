<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;
use App\Entities\EmployeeSection;

class EmployeeSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lists = EmployeeSection::all();
        return View('employeesection.index', compact('lists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('employeesection.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, EmployeeSection $empsection)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('section.add')
                        ->withErrors($validator)
                        ->withInput();
        }

        $empsection->name = $request->input('name');
        $empsection->save();

        return redirect()->route('section.index')->withNotice('Sukses Menambahkan Data Jabatan');
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
    public function edit($id, EmployeeSection $emp)
    {
        $employeesection = $emp->find($id);
        return View('employeesection.edit', compact('employeesection'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, EmployeeSection $emp)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('section.edit', ['id' => $id])
                        ->withErrors($validator)
                        ->withInput();
        }
        
        $section = $emp->find($id);

        $section->name = $request->input('name');
        $section->update();

        return redirect()->route('section.index')->withNotice('Sukses Memperbaharui Data Jabatan');
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
