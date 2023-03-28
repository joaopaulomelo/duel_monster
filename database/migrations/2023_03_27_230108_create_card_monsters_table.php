<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardMonstersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card_monsters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('atk');
            $table->integer('def')->nullable();
            $table->integer('level');
            $table->string('number');
            $table->longText('description');
            $table->string('type_id');
            $table->integer('attribute_id');
            $table->integer('rarity_id');
            $table->integer('image_id');
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
        Schema::dropIfExists('card_monsters');
    }
}
