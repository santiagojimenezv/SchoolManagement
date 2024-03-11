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
        Schema::create('students', function (Blueprint $table) {
            $table->id();

            $table->string('first_names', 50);
            $table->string('last_names', 50);
            $table->string('phone', 10)->nullable();;
            $table->enum('document_type', ['C.C', 'T.I', 'R.C', 'C.E']); 
            $table->string('document_number', 10);
            $table->date('date_of_birth')->nullable();
            $table->string('place_of_birth', 50)->nullable();
            $table->string('father_name', 100)->nullable();
            $table->string('father_document_number', 10)->nullable();
            $table->string('father_phone', 10)->nullable();
            $table->string('father_occupation', 100)->nullable();
            $table->string('mother_name', 50)->nullable();
            $table->string('mother_document_number', 10)->nullable();
            $table->string('mother_phone', 10)->nullable();
            $table->string('mother_occupation', 100)->nullable();
            $table->string('guardian_name', 50)->nullable();
            $table->string('guardian_document_number', 10)->nullable();
            $table->string('guardian_phone', 10)->nullable();
            $table->string('guardian_occupation', 100)->nullable();
            $table->string('address', 100)->nullable();
            $table->string('healthcare_provider', 50)->nullable();;
            $table->enum('blood_type', ['A+', 'B+', 'AB+', 'O+','A-', 'B-', 'AB-', 'O-'])->nullable();
            $table->string('medical_conditions', 100)->nullable();
            $table->string('allergies', 100)->nullable();
            $table->string('medications', 100)->nullable();
            $table->enum('ethnic_group', ['Afro', 'Indigena', 'ROM'])->nullable();
            $table->enum('status', ['activo', 'inactivo']);

            $table->foreignId('group_id')->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
