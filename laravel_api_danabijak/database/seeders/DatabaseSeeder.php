<?php

namespace Database\Seeders;

// use App\Models\Todo;
use App\Models\Transaction;
use App\Models\Merchant;
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
        // User::factory(10)->create();
        // Todo::factory(1000)->create();
        // Transaction::factory(100)->create();
        // Merchant::factory(1000)->create();

        // $this->call(TodoSeeder::class);
        // $this->call(TransactionSeeder::class);
        $this->call(Merchant::class);
    }
}
