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
            // $table->string('roles');
            $table->string('name');
            $table->string('discription')->nullable();
            $table->string('collection')->nullable();
            $table->string('category');
            $table->string('price')->nullable();
            $table->string('cuantity')->nullable();
            $table->string('sku')->nullable();
            // $table->enum('subcription_type',['STARTER','AGENCY','PROFESSIONAL'])->nullable();
            // $table->dateTime('subcription_start_date')->default(date('Y-m-d h:i:s'))->nullable();
            // $table->dateTime('subcription_end_date')->default(date('Y-m-d h:i:s'))->nullable();
            $table->string('size')->nullable();
            $table->boolean('is_paid')->default(0)->nullable();
            $table->boolean('is_cart')->default(0)->nullable();
            $table->boolean('is_deleted')->default(0)->nullable();
            $table->boolean('is_favourite')->default(0)->nullable();
            // $table->string('facebook_id')->nullable();
            // $table->string('google_id')->nullable();
            // $table->string('apple_id')->nullable();
            // $table->string('login_attampts')->default(0)->nullable();
            $table->string('stripe_customer_id')->nullable();
            $table->longText('Product_pictures')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
