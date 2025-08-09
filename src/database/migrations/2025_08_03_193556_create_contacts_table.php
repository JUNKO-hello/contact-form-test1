<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
public function up()
{
    Schema::create('contacts', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('categories_id')->nullable();
        $table->string('first_name', 255);
        $table->string('last_name', 255);
        $table->tinyInteger('gender')->unsigned()->default(1);
        $table->string('email', 255);
        $table->string('tel', 255);
        $table->string('adress', 255);
        $table->string('building', 255);
        $table->text('detail');
        $table->timestamps();  // created_at, updated_at を自動で作成、useCurrent()は不要
    });
}

public function down()
{
    Schema::dropIfExists('contacts');  // テーブルごと削除する
}
}