<?php  

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;



class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'firstname' =>'Admin',
            'lastname' =>'admin',
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('superadmin000'),
            'status'=>1,
            'role_id'=>1,
        ]);
    }
}
