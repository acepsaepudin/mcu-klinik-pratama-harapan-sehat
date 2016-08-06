<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entities\MedicalCheckUp;
use App\Entities\Company;
use App\Http\Requests;
use Validator;
use PDF;

class McuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lists = MedicalCheckUp::all();
        return View('mcu.index', compact('lists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Company::all();
        return View('mcu.add', compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, MedicalCheckUp $mcu)
    {
        $validator = Validator::make($request->all(), [
            'company_name' => 'required',
            'employee_id' => 'required',
            'merokok' => 'required',
            'alkohol' => 'required',
            'olahraga' => 'required',
            'beratbadan' => 'required',
            'tinggibadan' => 'required',
            'tekanandarah' => 'required',
            'hemoglobin' => 'required',
            'leukosit_a' => 'required',
            'hemotocrit' => 'required',
            'trombosit' => 'required',
            'lajuendapdarah' => 'required',
            'virushepatitishbsag' => 'required',
            //'guladarahsewaktu' => 'required',
            'warna' => 'required',
            'ph' => 'required',
            'beratjenis' => 'required',
            'lain_lain' => 'required',
            'epitelcell' => 'required',
            'leukosit_b' => 'required',
            'eritrosit' => 'required',
            'bakteri' => 'required',
            'keterangan' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('mcu.add')
                        ->withErrors($validator)
                        ->withInput();
        }

        // $mcu->company_name = $request->input('company_name');
        $mcu->employee_id = $request->input('employee_id');
        $mcu->merokok = $request->input('merokok');
        $mcu->alkohol = $request->input('alkohol');
        $mcu->olahraga = $request->input('olahraga');
        $mcu->beratbadan = $request->input('beratbadan');
        $mcu->tinggibadan = $request->input('tinggibadan');
        $mcu->tekanandarah = $request->input('tekanandarah');
        $mcu->hemoglobin = $request->input('hemoglobin');
        $mcu->leukosit_a = $request->input('leukosit_a');
        $mcu->hemotocrit = $request->input('hemotocrit');
        $mcu->trombosit = $request->input('trombosit');
        $mcu->lajuendapdarah = $request->input('lajuendapdarah');
        $mcu->virushepatitishbsag = $request->input('virushepatitishbsag');
        $mcu->guladarahsewaktu = $request->input('guladarahsewaktu');
        $mcu->warna = $request->input('warna');
        $mcu->ph = $request->input('ph');
        $mcu->beratjenis = $request->input('beratjenis');
        $mcu->lain_lain = $request->input('lain_lain');
        $mcu->epitelcell = $request->input('epitelcell');
        $mcu->leukosit_b = $request->input('leukosit_b');
        $mcu->eritrosit = $request->input('eritrosit');
        $mcu->bakteri = $request->input('bakteri');
        $mcu->keluhan = $request->input('keluhan');
        $mcu->keterangan = $request->input('keterangan');
        $mcu->save();

        return redirect()->route('mcu.index')->withNotice('Sukses Menambahkan Data MCU');
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
    public function edit($id)
    {
        $mcu = MedicalCheckUp::find($id);
        return View('mcu.edit',compact('mcu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

    /**
     * undocumented function
     *
     * @return void
     * @author 
     **/
    public function printPersonal($id)
    {
        // return View('mcu.index', compact('lists'));
        $data['mcu'] = MedicalCheckUp::find($id);
        $pdf = PDF::loadView('mcu.personalprint', $data);
        return $pdf->setPaper('a4')->inline();
    }
}
