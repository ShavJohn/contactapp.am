<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call([CompaniesTableSeeder::class, ContactsTableSeeder::class]);
    }
}

/*

$companies[] = [
    'name'          => $name = "Company $index",
    'address'       => "Address $name",
    'website'       => "Website $name",
    'email'         => "Email $name",
    'created_at'    => now(),
    'updated_at'    => now()
];

*/
