<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

use App\Http\Requests;
use App\Entities\Company;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lists = Company::all();
        return View('company.index', compact('lists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('company.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Company $company)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'address' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('company.add')
                        ->withErrors($validator)
                        ->withInput();
        }

        $company->name = $request->input('name');
        $company->address = $request->input('address');
        $company->save();

        return redirect()->route('company.index')->withNotice('Sukses Menambahkan Data Perusahaan');
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
    public function edit($id, Request $request, Company $cm)
    {
        $company = $cm->find($id);
        return View('company.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, Company $cm)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'address' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('company.edit', ['id' => $id])
                        ->withErrors($validator)
                        ->withInput();
        }
        
        $company = $cm->find($id);

        $company->name = $request->input('name');
        $company->address = $request->input('address');
        $company->update();

        return redirect()->route('company.index')->withNotice('Sukses Memperbaharui Data Perusahaan');
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
