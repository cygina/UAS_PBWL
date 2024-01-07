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
        Schema::create('tb_order', function (Blueprint $table) {
            $table->increments('id_order');
            $table->integer('id_customer')->unsigned();
            $table->integer('id_produk')->unsigned();
            $table->integer('quantity');
            $table->date('orderdate');
            $table->timestamps();
        });
        Schema::table('tb_order', function (Blueprint $table) {
            $table->foreign('id_customer')->references ('id_customer')->on('tb_customer')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_produk')->references ('id_produk')->on('tb_produk')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_order');
    }
};
