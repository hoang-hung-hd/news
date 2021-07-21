<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name="Henry Hoàng";
        $user->email = "hoang@gmail.com";
        $user->password = Hash::make('12345678');
        $user->save();

        $user = new User();
        $user->name="Huyền Gấu ";
        $user->email = "gau@gmail.com";
        $user->password = Hash::make('12345678');
        $user->save();
    }
}
