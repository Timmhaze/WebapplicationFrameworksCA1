<?php

use Illuminate\Database\Seeder;
use App\Doctor;
use App\Patient;
use App\Visit;

class VisitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $x = Doctor::all()->where('doctorId', 1)->first();
        $y = Patient::all()->where('patientId', 2)->first();

        $visit1 = new Visit();
        $visit1->doctorId = $x->id;
        $visit1->patientId = $y->id;
        $visit1->visitDate = "2018-12-07";
        $visit1->visitTime = "20:34:22";
        $visit1->visitCost = "50.00";
        $visit1->save();

        $x = Doctor::all()->where('doctorId', 2)->first();
        $y = Patient::all()->where('patientId', 3)->first();

        $visit2 = new Visit();
        $visit2->doctorId = $x->id;
        $visit2->patientId = $y->id;
        $visit2->visitDate = "2018-11-24";
        $visit2->visitTime = "16:05:15";
        $visit2->visitCost = "35.00";
        $visit2->save();

        $x = Doctor::all()->where('doctorId', 3)->first();
        $y = Patient::all()->where('patientId', 1)->first();

        $visit3 = new Visit();
        $visit3->doctorId = $x->id;
        $visit3->patientId = $y->id;
        $visit3->visitDate = "2018-11-24";
        $visit3->visitTime = "16:05:15";
        $visit3->visitCost = "35.00";
        $visit3->save();
    }
}
