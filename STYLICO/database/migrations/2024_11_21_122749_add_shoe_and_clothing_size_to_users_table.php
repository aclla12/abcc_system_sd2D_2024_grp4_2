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
        Schema::table('users', function (Blueprint $table) {
            $table->float('height')->nullable();//身長
            $table->float('weight')->nullable();//体重
            $table->float('shoe_size')->nullable(); // 靴のサイズ
            $table->string('clothing_size')->nullable(); // 洋服のサイズ
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['height','weight','shoe_size', 'clothing_size']);
        });
    }//動かすときに[php artisan migrate]これをする
};
