<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('PostTableSeeder');
		$this->command->info('Post table seeded!');

		$this->call('CategoryTableSeeder');
		$this->command->info('Category table seeded!');
	}

}
