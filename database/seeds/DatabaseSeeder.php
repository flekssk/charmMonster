<?php

use App\Models\Order\Order;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!Order::find(6)) {
            DB::table('order_status')
                ->insert(
                    [
                        'name' => 'Оплачен',
                        'language_id' => 1,
                    ]
                );
        }
    }
}
