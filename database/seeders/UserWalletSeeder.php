<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use DB;

class UserWalletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_wallets')->insert([
            'user_id' => 1,
            'bal' => '200',
            'ref_bonus' => '20',
            'created_at' => Carbon::now()
        ]);

        DB::table('user_wallets')->insert([
            'user_id' => 2,
            'bal' => '100',
            'ref_bonus' => '25',
            'created_at' => Carbon::now()
        ]);
    }
}
