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

             $table->string('name')->unique();

            $table->string('slug')->unique();

            $table->longText('description')->nullable();

            $table ->foreignId('product_category_id');


            // ->foreignId('parent_id')
            // ->nullable()
            // ->constrained('product_category_id', 'id')
            // ->nullOnDelete();

            $table->boolean('status')->default(true);

            $table->string('meta_title')->nullable();

            $table->longText('meta_description')->nullable();

            $table->longText('meta_keywords')->nullable();

            $table->timestamps();
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
