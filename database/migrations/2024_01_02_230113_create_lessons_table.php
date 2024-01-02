<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->id('lesson_id');

            $table->unsignedBigInteger('course_id');
            $table->foreign('course_id')
                ->references('course_id')
                ->on('courses');

            $table->unsignedBigInteger('lesson_type_id');
            $table->foreign('lesson_type_id')
                ->references('lesson_type_id')
                ->on('lesson_types');

            $table->string('name');
            $table->slug();
            $table->string('description')->nullable();

            $table->createdBy();
            $table->updatedBy();
            $table->deletedBy();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('lessons');
    }
};
