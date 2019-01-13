<?php

use Illuminate\Database\Seeder;
use App\Doctor;

class DoctorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $doctor1 = new Doctor();
       $doctor1->name = "John Dorian";
       $doctor1->postalAddress = "A9238";
       $doctor1->phoneNumber = "0831234567";
       $doctor1->email = "JD@Gmail.com";
       $doctor1->dateStarted = "2018-05-01";
       $doctor1->save();

       $doctor2 = new Doctor();
       $doctor2->name = "Turk Clive";
       $doctor2->postalAddress = "A9246";
       $doctor2->phoneNumber = "0871234567";
       $doctor2->email = "Turk@Gmail.com";
       $doctor2->dateStarted = "2018-04-01";
       $doctor2->save();

       $doctor3 = new Doctor();
       $doctor3->name = "Perry Cox";
       $doctor3->postalAddress = "A7256";
       $doctor3->phoneNumber = "0851234567";
       $doctor3->email = "DrCox@Gmail.com";
       $doctor3->dateStarted = "2010-04-01";
       $doctor3->save();
    }
}
