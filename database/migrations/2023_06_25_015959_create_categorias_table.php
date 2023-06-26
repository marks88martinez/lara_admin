<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('path_image')->nullable();

             $table->unsignedInteger('categorias_id')->nullable();
            //  $table->foreign('categorias_id')->references('id')->on('categorias')->onDelete('cascade');

            $table->enum('status', [ 'Active','Inactive'])->default('Active');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categorias');
    }
};
