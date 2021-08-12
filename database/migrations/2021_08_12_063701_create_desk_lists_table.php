<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeskListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desk_lists', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('desk_id');
            $table->string('name');
            $table->timestamps();

            $table
                ->foreign('desk_id')
                ->references('id')
                ->on('desks')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('desk_lists');
    }
}
