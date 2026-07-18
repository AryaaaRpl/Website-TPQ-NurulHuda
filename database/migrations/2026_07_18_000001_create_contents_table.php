<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void { Schema::create('contents', function (Blueprint $table) { $table->id(); $table->string('type', 30)->index(); $table->string('title'); $table->text('description')->nullable(); $table->string('image_url', 2048)->nullable(); $table->json('metadata')->nullable(); $table->string('status', 20)->default('draft')->index(); $table->unsignedInteger('sort_order')->default(0); $table->timestamps(); }); }
    public function down(): void { Schema::dropIfExists('contents'); }
};
