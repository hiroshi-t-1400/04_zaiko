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
        Schema::create('navigation_links', function (Blueprint $table) {
            $table->id();
            $table->string('label');    // ビュー内で使われる表示名
            $table->string('route_name')->nullable(); // ルート名
            $table->string('url')->nullable(); // カスタムurlが必要な場合
            $table->integer('order')->default(0); // 表示順
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('navigation_links');
    }
};
