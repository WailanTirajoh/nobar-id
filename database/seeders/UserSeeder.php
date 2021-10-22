<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'email' => 'super@app.com',
            'name' => 'Super Administrator',
            'password' => bcrypt('super')
        ]);

        Role::create([
            'name' => 'Super'
        ]);

        /**
         * Read detail about "Super" role permission at auth service provider
         * By default, super can bypass any permission
         */
        $user->assignRole('Super');

        // ----------------------------------------------------------------------

        $user = User::create([
            'email' => 'member@app.com',
            'name' => 'Member',
            'password' => bcrypt('member')
        ]);

        Role::create([
            'name' => 'Member'
        ]);

        $user->assignRole('Member');
    }
}
