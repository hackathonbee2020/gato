<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConversations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conversations', function (Blueprint $table) {
            $table->uuid('id')->index();
            $table->uuid('client_id');
            $table->foreign('client_id')->references('id')->on('clients');
            $table->uuid('departament_id');
            $table->foreign('departament_id')->references('id')->on('departaments');
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
        Schema::table('conversations',function (Blueprint $table) {
            $table->dropForeign(['cliente_id','departament_id']);
            $table->dropColumn(['cliente_id','departament_id']);
        });
        Schema::dropIfExists('conversations');
    }
}
