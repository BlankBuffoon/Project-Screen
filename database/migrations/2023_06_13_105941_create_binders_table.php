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
        Schema::create('developers', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id');
            $table->foreignId('project_id');

            $table->timestamps();
        });

        Schema::create('maintainers', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id');
            $table->foreignId('project_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('developers');
        Schema::dropIfExists('maintainers');
    }
};
