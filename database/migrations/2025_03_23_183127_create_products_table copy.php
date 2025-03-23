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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->nullable();
            $table->string('jan_code')->nullable();
            $table->string('name_ja');
            $table->string('name_en')->nullable();
            $table->text('description_ja')->nullable(); // 商品説明
            $table->text('description_en')->nullable();
            $table->string('unit_of_measure'); // 単位：個、箱、kg
            $table->string('category')->nullable(); // 原料、完成品etc
            $table->unsignedBigInteger('supplier_id'); // 主要サプライヤーID
            $table->foreign('supplier_id')->references('id')->on('supplier'); // 主要サプライヤーIDを外部キー制約する（サプライヤーテーブルのID有無を参照する）
            // $table->foreignId('supplier_id')->constrained(); // cnstrainedでsupplierのidだな、と自動判別させることも可能
            $table->decimal('purchase_price', 10, 2)->nullable();
            $table->decimal('sale_price', 10, 2)->nullable();
            // $table->integer('reorder_point')->unsigned(); // 再発注する最低在庫ボーダーライン
            // $table->integer('safety_stock')->unsigned(); // 在庫切れを防ぐためのバッファ在庫
            // $table->enum('status', ['active', 'inactive', 'discontinued'])->default('active'); // 在庫状態：有効、在庫切れ、製造中止
            $table->string('status')->default('active'); // 在庫状態：有効、在庫切れ、製造中止
            $table->timestamps();

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
