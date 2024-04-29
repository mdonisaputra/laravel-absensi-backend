<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'doni',
            'email' => 'doni@contoh.com',
            'password' => Hash::make('12345678'),
        
        ]);

        //data dummy for bappeda ogan_ilir
        \App\Models\Company::create([
            'name' => 'Bappeda Ogan Ilir',
            'email'=> 'bappeda@oganilir.com',
            'address'=> 'Komplek Perkantoran Terpadu, Tanjung Senai',
            'latitude'=> '-3.260317',
            'longitude'=> '104.65060',
            'radius_km'=> '0.5',
            'time_in'=> '08:00',
            'time_out'=> '17:00',
        ]);

        $this->call([
		    AttendanceSeeder::class,
            PermissionSeeder::class,

	    ]);
    }
}
