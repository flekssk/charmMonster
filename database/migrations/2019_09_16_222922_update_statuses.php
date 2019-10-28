<?php

use App\Models\Order\OrderStatus;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateStatuses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        OrderStatus::query()->truncate();

        foreach (OrderStatus::$orderMapping as $id => $name) {
            $orderStatus = new OrderStatus();

            $orderStatus->name = $name;
            $orderStatus->language_id = 1;

            $orderStatus->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
