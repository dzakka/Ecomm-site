<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditEcommsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ecomms', function (Blueprint $table) {
            //
            $table->integer('small')->nullable;
            $table->integer('large')->nullable;
            $table->integer('extra_large')->nullable;
            $table->text('color');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ecomms', function (Blueprint $table) {
            //
        });
    }
}
