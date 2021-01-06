<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	User::query()->truncate();

		return User::create([
			'name'              => config('app.gianhost_user'),
			'email'             => config('app.gianhost_email'),
			'password'          => Hash::make(config('app.gianhost_password')),
            'email_verified_at' => Carbon::now(),
            'appkey'            => md5(uniqid()),
            'appsecret'         => sha1(microtime())
		]);
    }
}
