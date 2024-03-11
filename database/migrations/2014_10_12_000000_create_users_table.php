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
        Schema::create('users', function (Blueprint $table) {
            $table->id();   
            $table->string('first_names', 50);
            $table->string('last_names', 50);         
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable(); 
            $table->string('password');
            $table->rememberToken();  
            $table->enum('document_type', ['C.C', 'T.I', 'R.C', 'C.E']); 
            $table->string('document_number', 10);                  
            $table->enum('status', ['activo', 'inactivo'])->nullable();
            $table->string('subject', 50)->nullable();
            $table->string('position')->nullable();

            

            $table->timestamps();
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
