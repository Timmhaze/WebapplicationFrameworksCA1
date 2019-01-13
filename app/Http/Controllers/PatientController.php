<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Patient;

class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::all();
        return view('patients.index')->with(['patients' => $patients]);
    }

    public function create()
    {
        return view('patients/create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:30',
        ]);

        $d = new Patient();
        $d->name = $request->input('name');
        $d->postalAddress = $request->input('postalAddress');
        $d->phoneNumber = $request->input('phoneNumber');
        $d->emailAddress = $request->input('email');
        $d->medicalInsurance = $request->input('medicalInsurance');
        $d->insuranceNumber = $request->input('insuranceNumber');
        $d->policyNumber = $request->input('policyNumber');
        $d->save();

        return redirect()->route('patients.index');
    }

    public function show($id)
    {
        $patient = Patient::findOrFail($id);

        return view('patients.show')->with([
            'patient' => $patient
        ]);
    }

    public function edit($id)
    {
      $patient = Patient::findOrFail($id);

      return view('patients.edit')->with([
        'patient' => $patient
      ]);
    }

    public function update(Request $request, $id)
    {
      $request->validate([
           'name' => 'required|max:100',
       ]);

        $d = Doctor::findOrFail($id);
        $d->name = $request->input('name');
        $d->postalAddress = $request->input('postalAddress');
        $d->phoneNumber = $request->input('phoneNumber');
        $d->emailAddress = $request->input('email');
        $d->medicalInsurance = $request->input('medicalInsurance');
        $d->insuranceNumber = $request->input('insuranceNumber');
        $d->policyNumber = $request->input('policyNumber');
        $d->save();

        return redirect()->route('doctors.index');
    }


    public function destroy($id)
    {
        $patient = Patient::findOrFail($id);
        $patient->delete();
        return redirect()->route('patient.index');
    }
}

