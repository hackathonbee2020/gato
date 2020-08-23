<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartaments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departaments', function (Blueprint $table) {
            $table->uuid('id')->index();
            $table->string('name');
            $table->string('status');
            $table->uuid('client_id');
            $table->foreign('client_id')->references('id')->on('clients');
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
        Schema::table('departaments',function (Blueprint $table) {
            $table->dropForeign(['client_id']);
            $table->dropColumn(['client_id']);
        });
        Schema::dropIfExists('departaments');
    }
}
