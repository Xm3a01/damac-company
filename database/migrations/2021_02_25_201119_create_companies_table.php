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
            $table->string('name')->default('Hash developed Projects');
            $table->longText('about');
            $table->string('about_section_1')->nullable();
            $table->string('about_section_2')->nullable();
            $table->string('about_section_3')->nullable();
            $table->string('why_us_title');
            $table->longText('why_us');
            $table->string('why_us_section_1')->nullable();
            $table->string('why_us_section_2')->nullable();
            $table->string('why_us_section_3')->nullable();
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
