<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void { Schema::create('applicants', function (Blueprint $table) { $table->id(); $table->string('registration_number')->unique(); $table->string('name'); $table->string('parent_name'); $table->string('phone', 30); $table->unsignedTinyInteger('age'); $table->string('program', 30); $table->string('status', 20)->default('new')->index(); $table->timestamps(); }); }
    public function down(): void { Schema::dropIfExists('applicants'); }
};
