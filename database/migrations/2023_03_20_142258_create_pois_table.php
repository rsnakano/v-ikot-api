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
        Schema::create('pois', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('history');
            $table->longText('courses');
            $table->longText('offices');
            $table->float('top', 8, 5);
            $table->float('bottom', 8, 5);
            $table->float('left', 8, 5);
            $table->float('right', 8, 5);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pois');
    }
};
