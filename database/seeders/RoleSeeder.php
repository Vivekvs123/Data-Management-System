<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $users =  [
                ['role_name'=>'superadmin'],
                ['role_name'=>'admin'],
               
                ['role_name'=>'sales team'],
          ];

          Role::insert($users);

    }
}

   
  

