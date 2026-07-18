<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('applicants', function (Blueprint $table) {
            $table->string('birth_certificate')->nullable()->after('program');
            $table->string('family_card')->nullable()->after('birth_certificate');
            $table->string('photo')->nullable()->after('family_card');
        });
    }

    public function down(): void
    {
        Schema::table('applicants', function (Blueprint $table) {
            $table->dropColumn(['birth_certificate', 'family_card', 'photo']);
        });
    }
};
