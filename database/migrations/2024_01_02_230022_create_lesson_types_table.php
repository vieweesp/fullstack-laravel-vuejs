<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('lesson_types', function (Blueprint $table) {
            $table->id('lesson_type_id');

            $table->boolean('is_active')->default(false);
            $table->string('name');
            $table->slug();

            $table->createdBy();
            $table->updatedBy();
            $table->deletedBy();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('lesson_types');
    }
};
