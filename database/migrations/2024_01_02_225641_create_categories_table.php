<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id('category_id');

            $table->string('name');
            $table->string('slug')->unique();
            $table->string('description')->nullable();

            $table->boolean('is_active')->default(true);

            $table->createdBy();
            $table->updatedBy();
            $table->deletedBy();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
