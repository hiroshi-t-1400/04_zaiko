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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name_ja', 100);
            $table->string('name_en', 255)->nullable();
            $table->unsignedInteger('quantity')->default(0);
            $table->string('unit_of_measure', 10); // 単位：個、箱、kg
            $table->decimal('category_id', 5, 0)->nullable()->index(); // 原料、完成品etc
            $table->decimal('price', 10, 2)->default(0);
            $table->timestamp('buy_date')->nullable()->index(); // 購入日
            $table->unsignedInteger('reorder_point')->nullable(); // 再購入をするボーダーライン
            $table->unsignedInteger('safety_stock')->nullable(); // 在庫切れを防ぐためのバッファ在庫
            $table->text('description_ja', 500)->nullable(); // 商品説明
            $table->string('img_path')->nullable(); // 画像パス
            $table->unsignedInteger('like_count')->default(0); // お気に入り度
            $table->timestamps();

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
