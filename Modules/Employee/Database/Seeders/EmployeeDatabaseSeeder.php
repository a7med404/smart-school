<?php

namespace Modules\Employee\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class EmployeeDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        
        Employee::create([
            'full_name' => 'name',
            'username' => 'smartadmin',
            'password' => Hash::make('smartschool'),
            'created_at'=> new DateTime(), 
            'updated_at'=> new DateTime()
        ]);
        // $this->call("OthersTableSeeder");
    }
}
