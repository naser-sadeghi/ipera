<?php

use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert(
        [
            'firstname' => 'Naser',
            'lastname' => 'Sadeghi Gharagoz',
            'email' => 'naser.sadeghi.edu@gmail.com',
            'phone' => '5524921363',
            'company_id' => '10',
        ]);
        DB::table('employees')->insert(
        [
            'firstname' => 'Ahmet',
            'lastname' => 'Varli',
            'email' => 'ahmet@hello.com',
            'phone' => '+90872918271',
            'company_id' => '11',
        ]);
        DB::table('employees')->insert(
        [
            'firstname' => 'John',
            'lastname' => 'Doe',
            'email' => 'john@gmail.com',
            'phone' => '5524921363',
            'company_id' => '12',
        ]);
        DB::table('employees')->insert(
        [
            'firstname' => 'Parisa',
            'lastname' => 'Salmanian',
            'email' => 'parisa@gmail.com',
            'phone' => '5524922163',
            'company_id' => '12',
        ]);
        DB::table('employees')->insert(
        [
            'firstname' => 'Rondal',
            'lastname' => 'Free',
            'email' => 'rf@test.com',
            'phone' => '55249221363',
            'company_id' => '10',
        ]);
        DB::table('employees')->insert(
        [
            'firstname' => 'Maryam',
            'lastname' => 'Asadi',
            'email' => 'mar@operation.co',
            'phone' => '+18271782719',
            'company_id' => '14',
        ]);
        DB::table('employees')->insert(
        [
            'firstname' => 'Zeynep',
            'lastname' => 'Intepe',
            'email' => 'zeynep@gmail.com',
            'phone' => '+1892672132',
            'company_id' => '14',
        ]);
        DB::table('employees')->insert(
        [
            'firstname' => 'Fatma',
            'lastname' => 'Gul',
            'email' => 'fatma@info.co',
            'phone' => '5522221362',
            'company_id' => '17',
        ]);
        DB::table('employees')->insert(
        [
            'firstname' => 'Rasool',
            'lastname' => 'Heidari',
            'email' => 'info@heidari.ir',
            'phone' => '+9012729172',
            'company_id' => '18',
        ]);
        DB::table('employees')->insert(
        [
            'firstname' => 'Haleh',
            'lastname' => 'Tulayi',
            'email' => 'hale@tulu.com',
            'phone' => '5524921321',
            'company_id' => '16',
        ]);
        DB::table('employees')->insert(
        [
            'firstname' => 'Sara',
            'lastname' => 'Sadeghi',
            'email' => 'sara.sadeghi.edu@gmail.com',
            'phone' => '+782136722',
            'company_id' => '19',
        ]);
        DB::table('employees')->insert(
        [
            'firstname' => 'Balazar',
            'lastname' => 'Tulayi',
            'email' => 'balazar@yahoo.com',
            'phone' => '+97385037',
            'company_id' => '21',
        ]);
        DB::table('employees')->insert(
            [
                'firstname' => 'Amanda',
                'lastname' => 'Wills',
                'email' => 'amanda@yahoo.com',
                'phone' => '+9767385037',
                'company_id' => '15',
            ]);
            DB::table('employees')->insert(
                [
                    'firstname' => 'Arya',
                    'lastname' => 'Sadeghi',
                    'email' => 'arya@gmail.com',
                    'phone' => '+1927385037',
                    'company_id' => '20',
                ]);
                DB::table('employees')->insert(
                    [
                        'firstname' => 'Leyla',
                        'lastname' => 'Oja',
                        'email' => 'soheyla@yahoo.com',
                        'phone' => '+9867385037',
                        'company_id' => '13',
                    ]);
    }
}
