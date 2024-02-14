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
        Schema::create('order_addresses', function (Blueprint $table) {
            $table->id();
            $table->string('invoiceno')->nullable();
            $table->string('date')->nullable();
            $table->bigInteger('order_id')->unsigned()->nullable();
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('company_name')->nullable();
            $table->string('country')->nullable();
            $table->string('street')->nullable();
            $table->string('suite')->nullable();
            $table->string('house')->nullable();
            $table->string('postcode')->nullable();
            $table->string('town')->nullable();
            $table->string('city')->nullable();
            $table->string('provience')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            
            $table->string('dif_first_name')->nullable();
            $table->string('dif_last_name')->nullable();
            $table->string('dif_company_name')->nullable();
            $table->string('dif_country')->nullable();
            $table->string('dif_street')->nullable();
            $table->string('dif_suite')->nullable();
            $table->string('dif_house')->nullable();
            $table->string('dif_postcode')->nullable();
            $table->string('dif_town')->nullable();
            $table->string('dif_city')->nullable();
            $table->string('dif_provience')->nullable();
            $table->string('dif_phone')->nullable();
            $table->string('dif_email')->nullable();
            
            $table->string('status')->default(1);
            $table->string('updated_by')->nullable();
            $table->string('created_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_addresses');
    }
};
