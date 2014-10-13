<?php

class UsersTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		User::create(array(
			'username' => 'admin',
			'email' => 'admin@admin.com',
			'name' => 'administrador',
			'password' => Hash::make('admin')  
			));
		User::create(array(
			'username' => 'jose2',
			'email' => 'jose@admin.com',
			'name' => 'jose',
			'password' => Hash::make('jose')  
			));
		User::create(array(
			'username' => 'maria2',
			'email' => 'maria@admin.com',
			'name' => 'maria',
			'password' => Hash::make('maria')  // genera contrasena incriptada
			));
		User::create(array(
			'username' => 'rene2',
			'email' => 'rene@admin.com',
			'name' => 'rene',
			'password' => Hash::make('rene')  // genera contrasena incriptada
			));
		User::create(array(
			'username' => 'carlos2',
			'email' => 'carlos@admin.com',
			'name' => 'carlos',
			'password' => Hash::make('carlos')  // genera contrasena incriptada
			));


	}

}
