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
            $table->id();  // Varsayılan birincil anahtar (id) ekliyoruz
            $table->string('User_Name')->unique();  // Kullanıcı adı benzersiz olmalı
            $table->string('Name');
            $table->string('Phone_Number');
            $table->integer('User_Type_ID');  // integer türüyle User_Type_ID ekliyoruz
            $table->string('User_Password');
            $table->string('User_Mail')->unique();  // E-posta benzersiz olmalı
            $table->timestamps();  // Zaman damgası ekler (created_at ve updated_at)
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
