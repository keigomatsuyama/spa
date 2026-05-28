<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToPetlovesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */public function up()
{
    Schema::table('petloves', function (Blueprint $table) {

        // タイトル
        $table->string('title')
              ->nullable();

        // 説明
        $table->text('description')
              ->nullable();

    });
}
}