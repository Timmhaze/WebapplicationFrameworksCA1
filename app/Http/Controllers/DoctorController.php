<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::all();
        return view('doctors.index')->with(['doctors' => $doctors]);
    }

    public function create()
    {
        return view('doctors/create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:30',
        ]);

        $d = new Doctor();
        $d->name = $request->input('name');
        $d->postalAddress = $request->input('postalAddress');
        $d->email = $request->input('email');
        $d->phoneNumber = $request->input('phoneNumber');
        $d->dateStarted = $request->input('dateStarted');
        $d->save();

        return redirect()->route('doctors.index');
    }

    public function show($id)
    {
        $doctor = Doctor::findOrFail($id);

        return view('doctors.show')->with([
            'doctor' => $doctor
        ]);
    }

    public function edit($id)
    {
      $doctor = Doctor::findOrFail($id);

      return view('doctors.edit')->with([
        'doctor' => $doctor
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
       $d->email = $request->input('email');
       $d->phoneNumber = $request->input('phoneNumber');
       $d->dateStarted = $request->input('dateStarted');
       $d->save();

       return redirect()->route('doctors.index');
    }


    public function destroy($id)
    {
        $doctor = Doctor::findOrFail($id);
        $doctor->delete();
        return redirect()->route('doctors.index');
    }
}
