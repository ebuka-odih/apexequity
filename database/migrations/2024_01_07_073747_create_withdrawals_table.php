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
        Schema::create('withdrawals', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('user_id');
            $table->string('withdrawal_method');
            $table->double('amount', 11, 2);

            $table->string('paypal_email')->nullable();
            $table->string('cashapp')->nullable();
            $table->string('skrill')->nullable();
            $table->string('btc_address')->nullable();
            $table->string('eth_address')->nullable();

            $table->string('bank')->nullable();
            $table->string('acct_name')->nullable();
            $table->string('acct_num')->nullable();
            $table->string('swift_code')->nullable();
            $table->integer('status')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('withdrawals');
    }
};
