<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid');
            $table->string('banner')->nullable();
            $table->text('desc')->nullable();
            $table->text('overview')->nullable();
            $table->string('title')->nullable();
            $table->string('duration')->nullable();
            $table->string('slug')->nullable();
            $table->integer('display_order')->nullable();
            $table->json('included')->nullable();
            $table->json('excluded')->nullable();
            $table->json('ammenities')->nullable();
            $table->enum('status', ['active', 'inactive', 'requested', 'rejected'])->default('inactive');
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
        Schema::dropIfExists('packages');
    }
}
