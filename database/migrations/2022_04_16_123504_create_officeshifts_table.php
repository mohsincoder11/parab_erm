<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficeshiftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('officeshifts', function (Blueprint $table) {
            $table->id();
            $table->integer('company_id');
            $table->string('shift_name');
            $table->string('monday_in')->nullable();
            $table->string('monday_out')->nullable();
            $table->string('tuesday_in')->nullable();
            $table->string('tuesday_out')->nullable();
            $table->string('wednesday_in')->nullable();
            $table->string('wednesday_out')->nullable();
            $table->string('thursday_in')->nullable();
            $table->string('thursday_out')->nullable();
            $table->string('friday_in')->nullable();
            $table->string('friday_out')->nullable();
            $table->string('saturday_in')->nullable();
            $table->string('saturday_out')->nullable();
            $table->string('sunday_in')->nullable();
            $table->string('sunday_out')->nullable();
            $table->integer('sunday_week_off')->default(0);
            $table->integer('monday_week_off')->default(0);
            $table->integer('tuesday_week_off')->default(0);
            $table->integer('wednesday_week_off')->default(0);
            $table->integer('thursday_week_off')->default(0);
            $table->integer('friday_week_off')->default(0);
            $table->integer('saturday_week_off')->default(0);
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
        Schema::dropIfExists('officeshifts');
    }
}
