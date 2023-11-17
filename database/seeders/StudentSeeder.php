<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::create([
            'name' => 'Rahul', 
            'email' => 'rahul@gmail.com',
            'admission_no' => '001',
            'dob'=>'2001-11-12',
            'class' => '12',
            'gender' => '1',
            'contact_no' => '434234324',
            'blood_group' => 'A+'
        ]);

        Student::create([
            'name' => 'Meena', 
            'email' => 'meena@gmail.com',
            'admission_no' => '002',
            'dob'=>'2002-01-11',
            'class' => '12',
            'gender' => '2',
            'contact_no' => '434234344',
            'blood_group' => 'B+'
        ]);

        Student::create([
            'name' => 'Kumar', 
            'email' => 'kumar@gmail.com',
            'admission_no' => '003',
            'dob'=>'2002-04-03',
            'class' => '11',
            'gender' => '1',
            'contact_no' => '434234355',
            'blood_group' => 'O+'
        ]);
    }
}
