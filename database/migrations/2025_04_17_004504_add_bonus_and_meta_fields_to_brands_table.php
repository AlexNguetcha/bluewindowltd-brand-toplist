<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('brands', function (Blueprint $table) {
            $table->string('bonus_title')->nullable();
            $table->string('bonus_subtitle')->nullable();
            $table->text('description')->nullable();
            $table->string('website')->nullable();
            $table->boolean('verified')->default(false);
        });
    }

    public function down(): void
    {
        Schema::table('brands', function (Blueprint $table) {
            $table->dropColumn([
                'bonus_title',
                'bonus_subtitle',
                'description',
                'website',
                'verified'
            ]);
        });
    }
};
