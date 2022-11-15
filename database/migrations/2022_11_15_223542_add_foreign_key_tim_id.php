<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyTimId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vozacs', function (Blueprint $table) {
            $table->after('titule', function ($table) {
                $table->foreignId('tim_id')->constrained('tims');
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vozacs', function (Blueprint $table) {
            //
        });
    }
}
