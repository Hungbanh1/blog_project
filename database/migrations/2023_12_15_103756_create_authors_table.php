<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->id();
            $table->string('name', 200);
            $table->string('email', 200);
            $table->string('phone', 20);
            $table->unsignedBigInteger('user_id'); // Foreign key column
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->softDeletes(); // deleted_at column
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('authors');
    }
}
