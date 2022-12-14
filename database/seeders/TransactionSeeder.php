<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactions')->insert([
            'type' => 'Deposit',
            'amount' => '200',
            'user_id' => 1,
            'created_at' => Carbon::now()
        ]);

        DB::table('transactions')->insert([
            'type' => 'Withdraw',
            'amount' => '50',
            'user_id' => 1,
            'created_at' => Carbon::now()
        ]);

        DB::table('transactions')->insert([
            'type' => 'Deposit',
            'amount' => '20',
            'user_id' => 1,
            'created_at' => Carbon::now()
        ]);

        DB::table('transactions')->insert([
            'type' => 'Withdraw',
            'amount' => '6',
            'user_id' => 1,
            'created_at' => Carbon::now()
        ]);

        DB::table('transactions')->insert([
            'type' => 'Withdraw',
            'amount' => '30',
            'user_id' => 2,
            'created_at' => Carbon::now()
        ]);

        DB::table('transactions')->insert([
            'type' => 'Deposit',
            'amount' => '300',
            'user_id' => 2,
            'created_at' => Carbon::now()
        ]);

        DB::table('transactions')->insert([
            'type' => 'Deposit',
            'amount' => '150',
            'user_id' => 2,
            'created_at' => Carbon::now()
        ]);
    }
}
