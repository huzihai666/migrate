<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAdminuser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // 创建表
    public function up()
    {
        Schema::create('adminuser', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    // 删除表
    public function down()
    {
        Schema::drop('adminuser');
    }
}
