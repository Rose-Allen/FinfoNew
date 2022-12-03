<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_addresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('country_id')->nullable();
            $table->unsignedBigInteger('city_id')->nullable();
            $table->string('address');
            $table->string('home');
            $table->integer('flat');

            $table->unsignedBigInteger("user_id")->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign("user_id", "address_user_fk")->on("users")->references("id");

            $table->foreign("country_id", "user_country_fk")->on("address_countries")->references("id");
            $table->foreign("city_id", "user_city_fk")->on("address_cities")->references("id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_addresses');
    }
};
