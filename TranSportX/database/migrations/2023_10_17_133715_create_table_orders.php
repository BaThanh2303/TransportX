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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer("code_orders");
            $table->unsignedBigInteger("user_id")->nullable();
            $table->smallInteger("status")->default(0);
            $table->string("sender_name");
            $table->string("sender_telephone");
            $table->string("sender_address");
            $table->string("full_name");
            $table->integer("telephone");
            $table->string("address");
            $table->unsignedDecimal("total_price")->nullable();
            $table->timestamps();
            $table->foreign("user_id")->references("id")->on("users");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
