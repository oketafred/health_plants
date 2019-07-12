<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('roles')->truncate();
    	// Role::create([
    	// 	'name' => 'Admin',
    	// 	'slug' => 'admin',
    	// ]);

    	// Role::create([
    	// 	'name' => 'Clinican',
    	// 	'slug' => 'clinican',
    	// ]);
    }
}