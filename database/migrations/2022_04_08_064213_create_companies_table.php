<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('company_type');
            $table->string('trading_name')->nullable();
            $table->string('website')->nullable();
            $table->string('pan_no')->nullable();
            $table->string('tan_no')->nullable();
            $table->string('email')->nullable();
            $table->string('registration_no')->nullable();
            $table->string('gstin');
            $table->string('company_logo')->nullable();
            $table->string('registered_address');
            $table->string('sector_type')->nullable();
            $table->string('contact_no')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('contact_person_name')->nullable();
            $table->string('person_mobile')->nullable();
          

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
        Schema::dropIfExists('companies');
    }
}
