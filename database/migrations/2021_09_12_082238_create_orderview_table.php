<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderview', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('name',10)->comment('買家姓名');
            $table->string('customaccount',10)->comment('買家帳號');
            $table->String('email')->comment('電子郵件');
            $table->string('phone',15)->comment('手機號碼');
            $table->string('address')->comment('地址');
            $table->string('unitname')->comment('商品名稱');
            $table->integer('unitnum')->comment('商品數量');
            $table->integer('unitprice')->comment('商品金額');

            $table->foreign('customaccount')->references('account')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('orderview');
    }
}
