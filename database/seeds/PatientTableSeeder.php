<?php

use Illuminate\Database\Seeder;
use App\Patient;

class PatientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $patient1 = new Patient();
        $patient1->name = "Kyle Mosby";
        $patient1->postalAddress = "A6538";
        $patient1->phoneNumber = "0837654321";
        $patient1->emailAddress = "KMosby@Gmail.com";
        $patient1->medicalInsurance = "1";
        $patient1->insuranceNumber = "876553543";
        $patient1->policyNumber = "546365";
        $patient1->save();

        $patient2 = new Patient();
        $patient2->name = "James Knight";
        $patient2->postalAddress = "A9986";
        $patient2->phoneNumber = "0877654321";
        $patient2->emailAddress = "JKnight@Gmail.com";
        $patient2->medicalInsurance = "1";
        $patient2->insuranceNumber = "876556543";
        $patient2->policyNumber = "543455";
        $patient2->save();

        $patient3 = new Patient();
        $patient3->name = "Mick Murphy";
        $patient3->postalAddress = "A8656";
        $patient3->phoneNumber = "0857654321";
        $patient3->emailAddress = "MMurphy@Gmail.com";
        $patient3->medicalInsurance = "0";
        $patient2->insuranceNumber = "";
        $patient2->policyNumber = "";
        $patient3->save();
    }
}
