<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call('UserTableSeeder');
        $this->command->info('User table seeded!');
        $this->call('AdvertisementsTableSeeder');
        $this->command->info('Advertisements table seeded!');
        $this->call('PicturesTableSeeder');
        $this->command->info('Pictures table seeded!');

    }
}
