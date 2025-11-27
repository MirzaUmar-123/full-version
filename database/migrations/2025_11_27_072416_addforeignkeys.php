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
            if (Schema::hasColumn('orders', 'user_id')) {
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            }
            if (Schema::hasColumn('orders', 'coupon_id')) {
                $table->foreign('coupon_id')->references('id')->on('coupons')->onDelete('set null');
            }
        });

        // Add foreign key to order_items table
        Schema::table('order_items', function (Blueprint $table) {
            if (Schema::hasColumn('order_items', 'order_id')) {
                $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            }
            if (Schema::hasColumn('order_items', 'product_id')) {
                $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            }
        });

        // Add foreign keys to payments table
        Schema::table('payments', function (Blueprint $table) {
            if (Schema::hasColumn('payments', 'user_id')) {
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            }
            if (Schema::hasColumn('payments', 'order_id')) {
                $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            }
        });

        // Add foreign keys to shipments table
        Schema::table('shipments', function (Blueprint $table) {
            if (Schema::hasColumn('shipments', 'user_id')) {
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            }
            if (Schema::hasColumn('shipments', 'order_id')) {
                $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            }
        });

        // Add foreign keys to reviews table
        Schema::table('reviews', function (Blueprint $table) {
            if (Schema::hasColumn('reviews', 'user_id')) {
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            }
            if (Schema::hasColumn('reviews', 'product_id')) {
                $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            }
            if (Schema::hasColumn('reviews', 'order_id')) {
                $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            }
        });

        // Add foreign keys to wishlists table
        Schema::table('wishlists', function (Blueprint $table) {
            if (Schema::hasColumn('wishlists', 'user_id')) {
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            }
            if (Schema::hasColumn('wishlists', 'product_id')) {
                $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            }
        });

        // Add foreign keys to cart table
        Schema::table('cart', function (Blueprint $table) {
            if (Schema::hasColumn('cart', 'user_id')) {
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            }
            if (Schema::hasColumn('cart', 'product_id')) {
                $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            }
        });

        // Add foreign keys to products table
        Schema::table('products', function (Blueprint $table) {
            if (Schema::hasColumn('products', 'category_id')) {
                $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            }
            if (Schema::hasColumn('products', 'brand_id')) {
                $table->foreign('brand_id')->references('id')->on('brands')->onDelete('set null');
            }
        });

        // Add foreign keys to transactions table
        Schema::table('transactions', function (Blueprint $table) {
            if (Schema::hasColumn('transactions', 'user_id')) {
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            }
            if (Schema::hasColumn('transactions', 'payment_id')) {
                $table->foreign('payment_id')->references('id')->on('payments')->onDelete('cascade');
            }
        });

        // Add foreign keys to coupons table (if it has user_id for admin tracking)
        Schema::table('coupons', function (Blueprint $table) {
            if (Schema::hasColumn('coupons', 'created_by')) {
                $table->foreign('created_by')->references('id')->on('users')->onDelete('set null');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop foreign keys in reverse order (guarded by column checks)
        Schema::table('coupons', function (Blueprint $table) {
            if (Schema::hasColumn('coupons', 'created_by')) {
                $table->dropForeign(['created_by']);
            }
        });

        Schema::table('transactions', function (Blueprint $table) {
            if (Schema::hasColumn('transactions', 'payment_id')) {
                $table->dropForeign(['payment_id']);
            }
            if (Schema::hasColumn('transactions', 'user_id')) {
                $table->dropForeign(['user_id']);
            }
        });

        Schema::table('products', function (Blueprint $table) {
            if (Schema::hasColumn('products', 'brand_id')) {
                $table->dropForeign(['brand_id']);
            }
            if (Schema::hasColumn('products', 'category_id')) {
                $table->dropForeign(['category_id']);
            }
        });

        Schema::table('cart', function (Blueprint $table) {
            if (Schema::hasColumn('cart', 'product_id')) {
                $table->dropForeign(['product_id']);
            }
            if (Schema::hasColumn('cart', 'user_id')) {
                $table->dropForeign(['user_id']);
            }
        });

        Schema::table('wishlists', function (Blueprint $table) {
            if (Schema::hasColumn('wishlists', 'product_id')) {
                $table->dropForeign(['product_id']);
            }
            if (Schema::hasColumn('wishlists', 'user_id')) {
                $table->dropForeign(['user_id']);
            }
        });

        Schema::table('reviews', function (Blueprint $table) {
            if (Schema::hasColumn('reviews', 'order_id')) {
                $table->dropForeign(['order_id']);
            }
            if (Schema::hasColumn('reviews', 'product_id')) {
                $table->dropForeign(['product_id']);
            }
            if (Schema::hasColumn('reviews', 'user_id')) {
                $table->dropForeign(['user_id']);
            }
        });

        Schema::table('shipments', function (Blueprint $table) {
            if (Schema::hasColumn('shipments', 'order_id')) {
                $table->dropForeign(['order_id']);
            }
            if (Schema::hasColumn('shipments', 'user_id')) {
                $table->dropForeign(['user_id']);
            }
        });

        Schema::table('payments', function (Blueprint $table) {
            if (Schema::hasColumn('payments', 'order_id')) {
                $table->dropForeign(['order_id']);
            }
            if (Schema::hasColumn('payments', 'user_id')) {
                $table->dropForeign(['user_id']);
            }
        });

        Schema::table('order_items', function (Blueprint $table) {
            if (Schema::hasColumn('order_items', 'product_id')) {
                $table->dropForeign(['product_id']);
            }
            if (Schema::hasColumn('order_items', 'order_id')) {
                $table->dropForeign(['order_id']);
            }
        });

        Schema::table('orders', function (Blueprint $table) {
            if (Schema::hasColumn('orders', 'coupon_id')) {
                $table->dropForeign(['coupon_id']);
            }
            if (Schema::hasColumn('orders', 'user_id')) {
                $table->dropForeign(['user_id']);
            }
        });
    }
};
