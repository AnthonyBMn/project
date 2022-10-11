<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PHPUnit\Framework\Constraint\Constraint;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos_teachers', function (Blueprint $table) {
            $table->id();

            $table->foreignId('alumno_id')
                  ->nullable()
                  ->constrained('alumnos')
                  ->cascadeOnDelete()
                  ->nullOnDelete();

            $table->foreignId('teacher_id')
                  ->nullable()
                  ->constrained('teachers')
                  ->cascadeOnDelete()
                  ->nullOnDelete();

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
        Schema::dropIfExists('alumno_teacher');
    }
};