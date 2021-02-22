<?php

use Illuminate\Database\Seeder;

Use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$user =[ 
    		[
    			'name'=>'admin',
    			'email'=>'admin@gmail.com',
    			'level'=>'admin',
    			'password'=>bcrypt('123456'),
    		],
    		[
    			'name'=>'Satria Yusuf',
    			'email'=>'belajarsatria21@gmail.com',
    			'level'=>'siswa',
    			'password'=>bcrypt('123456'),
    		],
            [
                'name'=>'Satria aja',
                'email'=>'satria@gmail.com',
                'level'=>'siswa',
                'password'=>bcrypt('123456'),
            ],
    	];
    	foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
