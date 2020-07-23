<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class Userseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Alvaro',
            'email'=>'alvaro@alvaro',
            'email_verified_at'=>Carbon::now(),
            'password'=>Hash::make('12121212'),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);

        DB::table('users')->insert([
            'name'=>'Veronica',
            'email'=>'vero@vero',
            'email_verified_at'=>Carbon::now(),
            'password'=>Hash::make('12121212'),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
    }
}
