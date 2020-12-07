<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Patients')->insert([
            'Pat_id' =>Str::random(10),
            'Pat_name' =>Str::random(10),
            'Pat_MobileNo' =>Str::random(10),
            'Pat_Email' =>Str::random(15).'@gmail.com',
            'Pat_password' =>Hash::make('test123'),
            'Pat_address'=>Str::random(10),
            'Pat_DateOfBirth' =>date::random(10),
            'Pat_Gender' =>Str::random(10),
            'Pat_Nic' =>Str::random(10),
			
           
        ]);
    
        DB::table('medicine_stocks')->insert([
            'Med_No' =>Str::random(10),
            'Med_Name' =>Str::random(10),
            'Dosage' =>Str::random(10),
            'Consumption_time'=>Str::random(10),
            'Unit_Price' =>is_integer::random(10),
            'Exp_Date' =>date::random(10),
            'Manu_Date' =>date::random(10),
            'Quantity'=>Str::random(10),
           
			
       
       
        ]);
        DB::table('prescriptions')->insert([
            'Pres_No' =>Str::random(10),
            'Pat_id' =>Str::random(10),
            'Diagnosis' =>Str::random(10),
            'Dosage' =>Str::random(10),
            'Med_Name'=>Str::random(10),
           
         ]);
         DB::table('periods')->insert([
            'Period_ID' =>Str::random(10),
            'Time_Period' =>Str::random(10),
            
			
        ]);
        DB::table('doctors')->insert([
            'Doctor_ID' => Str::random(10),
            'Specialization' => Str::random(10),
            'Doctor_Name' => Str::random(10),
            'Available_time_slot' => Str::random(10),
            'Period_ID' => Str::random(10),
            'No_of_Patients' => Str::random(10),
           
        ]);
        DB::table('appoinments')->insert([
            'App_No' =>Str::random(10),
            'Pat_id' =>Str::random(10),
            'Doctor_ID' =>Str::random(10),
            'Doctor_Name'=>Str::random(10),
            'Booked_Date'=>date::random(10),
            'Booked_time'=>time::random(10),
			
        ]);
        DB::table('working_periods')->insert([
            'Period_ID' =>Str::random(10),
            'Doctor_ID' =>Str::random(10),
            'Date' =>date::random(10),
            'No_of_Patients'=>integer::random(10),
			
        ]);
    }
}
