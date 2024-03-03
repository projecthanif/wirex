<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Voucher;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('voucher', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->float('voucher_balance')->default(0);
            $table->string('voucher')->default('true');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voucher');
    }
};
