<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('technical_id')->nullable();
            $table->foreignId('category_id');
            $table->foreignId('issue_id');
            $table->foreignId('issue_type_id');
            $table->tinyInteger('status')->default(\App\Helpers\Constant::ORDER_STATUSES['New']);
            $table->double('amount')->nullable();
            $table->date('order_date')->nullable();
            $table->time('order_time')->nullable();
            $table->string('address')->nullable();
            $table->string('note')->nullable();
            $table->string('reject_reason')->nullable();
            $table->string('cancel_reason')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
