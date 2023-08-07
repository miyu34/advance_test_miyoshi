<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('family-name')->nullable(false);
            $table->string('given-name')->nullable(false);
            $table->unsignedTinyInteger('gender')->nullable();
            $table->string('email')->nullable(false);
            $table->char('postcode')->nullable(false);
            $table->string('address')->nullable();
            $table->string('building_name');
            $table->text('opinion', 120)->nullable(false);
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
        Schema::dropIfExists('contacts');
    }
}
