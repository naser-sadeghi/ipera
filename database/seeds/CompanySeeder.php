<?php

use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert(
        [
            'logo' => '1584512622.jpg',
            'name' => 'Apple',
            'address' => 'California',
            'phone' => '+16729821022',
            'email' => 'info@apple.com',
            'website' => 'http://www.apple.com',
        ]);
        DB::table('companies')->insert(
        [
            'logo' => '1584512587.jpg',
            'name' => 'Nike',
            'address' => 'Istanbul',
            'phone' => '+905521234344',
            'email' => 'info@nike.com',
            'website' => 'http://www.nike.com',
        ]);
        DB::table('companies')->insert(
        [
            'logo' => '1584512678.jpg',
            'name' => 'Adidas',
            'address' => 'Berlin',
            'phone' => '+496721920012',
            'email' => 'admin@adidas.com',
            'website' => 'http://www.adidas.com',
        ]);
        DB::table('companies')->insert(
        [
            'logo' => '1584512739.png',
            'name' => 'Coca Cola',
            'address' => 'New York',
            'phone' => '+18271782712',
            'email' => 'sales@cocacola.com',
            'website' => 'http://www.cocacola.com',
        ]);
        DB::table('companies')->insert(
        [
            'logo' => '1584513063.jpg',
            'name' => 'Google',
            'address' => 'Washington',
            'phone' => '+17282619910',
            'email' => 'info@google.com',
            'website' => 'http://www.google.com',
        ]);
        DB::table('companies')->insert(
        [
            'logo' => '1584513124.png',
            'name' => 'Samsung',
            'address' => 'London',
            'phone' => '+446732781029',
            'email' => 'sales@samsung.com',
            'website' => 'http://www.samsung.com',
        ]);
        DB::table('companies')->insert(
        [
            'logo' => '1584513193.png',
            'name' => 'Heinken',
            'address' => 'Munich',
            'phone' => '+498709018624',
            'email' => 'info@hk.co',
            'website' => 'http://www.hk.com',
        ]);
        DB::table('companies')->insert(
        [
            'logo' => '1584513239.webp',
            'name' => 'Jeep',
            'address' => 'Manchester',
            'phone' => '+448289018298',
            'email' => 'info@jeep.co',
            'website' => 'http://www.jeep.co',
        ]);
        DB::table('companies')->insert(
        [
            'logo' => '1584513336.jpg',
            'name' => 'Benz',
            'address' => 'Hamburg',
            'phone' => '+497772213',
            'email' => 'info@benz.com',
            'website' => 'http://www.benz.com',
        ]);
        DB::table('companies')->insert(
        [
            'logo' => '1584513395.png',
            'name' => 'Digikala',
            'address' => 'Tehran',
            'phone' => '+98214326725',
            'email' => 'info@digikala.com',
            'website' => 'http://www.digikala.com',
        ]);
        DB::table('companies')->insert(
        [
            'logo' => '1584513439.jpg',
            'name' => 'Pepsi',
            'address' => 'Istanbul',
            'phone' => '+905521871363',
            'email' => 'admin@pepsi.com',
            'website' => 'http://www.pepsi.com',
        ]);
        DB::table('companies')->insert(
        [
            'logo' => '1584513503.png',
            'name' => 'Yahoo!',
            'address' => 'Las Vegas',
            'phone' => '+18881232810',
            'email' => 'info@yahoo.com',
            'website' => 'https://www.yahoo.com',
        ]);
    }
}
