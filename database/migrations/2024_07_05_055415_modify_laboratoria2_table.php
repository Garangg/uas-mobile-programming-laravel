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
        Schema::table('laboratoria', function (Blueprint $table) {
            //
            $table->dropColumn('facilities');
            $table->double('length')->after('name');
            $table->double('width')->after('length');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('laboratoria', function (Blueprint $table) {
            //
        });
    }
};
