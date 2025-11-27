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
        // Add foreign key to orders table
        Schema::table('orders', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('coupon_id')->nullable()->constrained('coupons')->onDelete('set null');
        });

        // Add foreign key to order_items table
        Schema::table('order_items', function (Blueprint $table) {
            $table->foreignId('order_id')->constrained('orders')->onDelete('cascade');
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
        });

        // Add foreign keys to payments table
        Schema::table('payments', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('order_id')->nullable()->constrained('orders')->onDelete('cascade');
        });

        // Add foreign keys to shipments table
        Schema::table('shipments', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('order_id')->constrained('orders')->onDelete('cascade');
        });

        // Add foreign keys to reviews table
        Schema::table('reviews', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            $table->foreignId('order_id')->nullable()->constrained('orders')->onDelete('cascade');
        });

        // Add foreign keys to wishlists table
        Schema::table('wishlists', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
        });

        // Add foreign keys to cart table
        Schema::table('cart', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
        });

        // Add foreign keys to products table
        Schema::table('products', function (Blueprint $table) {
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->foreignId('brand_id')->nullable()->constrained('brands')->onDelete('set null');
        });

        // Add foreign keys to transactions table
        Schema::table('transactions', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('payment_id')->nullable()->constrained('payments')->onDelete('cascade');
        });

        // Add foreign keys to coupons table (if it has user_id for admin tracking)
        Schema::table('coupons', function (Blueprint $table) {
            if (!Schema::hasColumn('coupons', 'created_by')) {
                $table->foreignId('created_by')->nullable()->constrained('users')->onDelete('set null');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop foreign keys in reverse order
        Schema::table('coupons', function (Blueprint $table) {
            $table->dropForeignKeyIfExists(['created_by_id']);
        });

        Schema::table('transactions', function (Blueprint $table) {
            $table->dropForeignKeyIfExists(['user_id', 'payment_id']);
        });

        Schema::table('products', function (Blueprint $table) {
            $table->dropForeignKeyIfExists(['category_id', 'brand_id']);
        });

        Schema::table('cart', function (Blueprint $table) {
            $table->dropForeignKeyIfExists(['user_id', 'product_id']);
        });

        Schema::table('wishlists', function (Blueprint $table) {
            $table->dropForeignKeyIfExists(['user_id', 'product_id']);
        });

        Schema::table('reviews', function (Blueprint $table) {
            $table->dropForeignKeyIfExists(['user_id', 'product_id', 'order_id']);
        });

        Schema::table('shipments', function (Blueprint $table) {
            $table->dropForeignKeyIfExists(['user_id', 'order_id']);
        });

        Schema::table('payments', function (Blueprint $table) {
            $table->dropForeignKeyIfExists(['user_id', 'order_id']);
        });

        Schema::table('order_items', function (Blueprint $table) {
            $table->dropForeignKeyIfExists(['order_id', 'product_id']);
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeignKeyIfExists(['user_id', 'coupon_id']);
        });
    }
};
