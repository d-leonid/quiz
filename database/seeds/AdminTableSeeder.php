<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Admin;


class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$user = new Admin;
    	$user->name = 'admin';
    	$user->email = 'quiz@gmail.com';
    	$user->password = Hash::make('123456');
    	$user->save();
    }
}
