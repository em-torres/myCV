<?php

use App\User;
use Illuminate\Database\Seeder;

class RoleToUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $firstUser = User::where('id', 1)->first();
        $secondUser = User::where('id', 2)->first();

        $firstUser->assignRole('admin');
        $secondUser->assignRole('guest');
    }
}
