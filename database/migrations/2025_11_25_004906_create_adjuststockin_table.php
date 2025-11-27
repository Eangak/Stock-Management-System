<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('adjuststockins', function (Blueprint $table) {
            $table->id();

            // Foreign key must be unsignedBigInteger to match products.id
            $table->foreignId('product_id')
                ->constrained('products')
                ->cascadeOnDelete();

            $table->date('date');
            $table->integer('quantity');
            $table->decimal('unit_price', 10, 2);
            $table->text('remark')->nullable();

            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adjuststockin');
    }
};
