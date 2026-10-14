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
        Schema::table('sliders', function (Blueprint $table) {
            $table->string('btn_1_text')->nullable()->after('description');
            $table->string('btn_1_url')->nullable()->after('btn_1_text');
            $table->string('btn_2_text')->nullable()->after('btn_1_url');
            $table->string('btn_2_url')->nullable()->after('btn_2_text');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sliders', function (Blueprint $table) {
            $table->dropColumn(['btn_1_text', 'btn_1_url', 'btn_2_text', 'btn_2_url']);
        });
    }
};
