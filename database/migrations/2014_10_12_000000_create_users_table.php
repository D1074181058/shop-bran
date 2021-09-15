<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->Increments('num_ID')->comment('編號');
            $table->string('name',10)->comment('姓名');
            $table->string('account',10)->comment('帳號')->unique();
            $table->string('password',30)->comment('密碼');
            $table->String('email')->comment('電子郵件')->unique();
            $table->date('date')->comment('生日日期')->nullable();
            $table->string('phone',15)->comment('手機號碼')->nullable();
            $table->string('address')->comment('地址')->nullable();

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
        Schema::dropIfExists('users');
    }
}
